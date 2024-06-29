<?php
namespace Grav\Plugin;

use Grav\Common\Grav;
use Grav\Common\Plugin;
use Composer\Autoload\ClassLoader;
use RocketTheme\Toolbox\Event\Event;


class StripePlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000],
                ['onPluginsInitialized', 0]
            ],
        ];
    }

    public function autoload() : ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    public static function getCurrencies()
    {
        include __DIR__ .'/helpers/currencies.php';

        $options = [];

        foreach ($currencies as $currency)
        {
            $options[strtolower($currency)] = $currency;
        }

        return $options;
    }

    public function onPluginsInitialized()
    {
        if (!$this->isAdmin())
        {
            $this->enable([
                'onTwigSiteVariables'   => ['onTwigSiteVariables', 0],
                'onPageInitialized'     => ['onPageInitialized', 0],
                'onTwigTemplatePaths'   => ['onTwigTemplatePaths', 0],
                'onTask.stripeCheckout' => ['stripeCheckout', 0],
            ]);
        }
        else
        {
            $this->enable([
                'onGetPageBlueprints' => ['onGetPageBlueprints', 0],
            ]);
        }
    }

    public function onGetPageBlueprints(Event $event)
    {
        $types = $event->types;
        $types->scanBlueprints('plugins://stripe/blueprints/pages/');
    }

    public function onPageInitialized(Event $e)
    {
        $page = $e['page'];

        if ($page->template() != 'stripe')
            return;

        $assets = $this->grav['assets'];
        $assets->addJs('https://js.stripe.com/v3/');
        $assets->addJs('https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch');
        $assets->addJs('plugin://stripe/assets/js/stripe.js');
        $assets->addCss('plugin://stripe/assets/css/stripe.css');
    }

    public function onTwigSiteVariables()
    {
    }

    public function onTwigTemplatePaths()
    {
        $twig = $this->grav['twig'];
        $twig->twig_paths[] = __DIR__ . '/templates';
    }

    public function stripeCheckout()
    {
        header('Content-Type: application/json');

        $grav = $this->grav;
        $post = $grav['uri']->post();
        $lang = $grav['language'];
        $config = $grav['config'];
        $token = isset($post['token']) ? $post['token'] : '';
        $amount = isset($post['amount']) ? $post['amount'] : 0;
        $invoiceNumber = isset($post['invoice_number']) ? $post['invoice_number'] : '';

        $response = [
            'success'   => false,
            'message'   => '',
        ];

        if (empty($token) || empty($amount) || empty($invoiceNumber))
        {
            $response['message'] = $lang->translate('PLUGIN_STRIPE.INVALID_REQUEST');

            echo json_encode($response);
            exit;
        }

        $secretKey = $config->get('plugins.stripe.secret_key');
        $currency = $config->get('plugins.stripe.default_currency');
        $description = $config->get('plugins.stripe.payment_description');
        $description = str_replace('INVOICE_NUMBER', $invoiceNumber, $description);
        \Stripe\Stripe::setApiKey($secretKey);

        try
        {
            $charge = \Stripe\Charge::create([
                'amount'        => $amount * 100,
                'currency'      => $currency,
                'description'   => $description,
                'source'        => $token,
                'metadata'      => [
                    'invoice_number' => $invoiceNumber
                ]
            ]);
        }
        catch (Exception $e)
        {
            $grav['log']->error($e->getMessage());
            $response['message'] = $e->getMessage();

            echo json_encode($response);
            exit;
        }

        if (!isset($charge->paid) || !$charge->paid)
        {
            $response['message'] = $lang->translate('PLUGIN_STRIPE.INTERNAL_ERROR');

            echo json_encode($response);
            exit;
        }

        $response['success'] = true;

        echo json_encode($response);
        exit;
    }
}