<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/stripe/blueprints.yaml',
    'modified' => 1633959751,
    'data' => [
        'name' => 'Stripe',
        'version' => '1.0.0',
        'icon' => 'code',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'secret_key' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_STRIPE.SECRET_KEY'
                ],
                'public_key' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_STRIPE.PUBLIC_KEY'
                ],
                'default_currency' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_STRIPE.DEFAULT_CURRENCY',
                    '@data-options' => '\\Grav\\Plugin\\StripePlugin::getCurrencies'
                ],
                'amount_prefix' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_STRIPE.AMOUNT_PREFIX',
                    'help' => 'PLUGIN_STRIPE.AMOUNT_PREFIX_HELP'
                ],
                'amount_postfix' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_STRIPE.AMOUNT_POSTFIX',
                    'help' => 'PLUGIN_STRIPE.AMOUNT_POSTFIX_HELP'
                ],
                'payment_description' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_STRIPE.PAYMENT_DESCRIPTION',
                    'help' => 'PLUGIN_STRIPE.PAYMENT_DESCRIPTION_HELP'
                ]
            ]
        ]
    ]
];
