<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/config/plugins/email.yaml',
    'modified' => 1633959747,
    'data' => [
        'enabled' => true,
        'from' => 'web@g2it.com.au',
        'from_name' => 'G2IT - Website',
        'to' => 'info@g2it.com.au',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'mail.smtp2go.com',
                'port' => 443,
                'encryption' => 'ssl',
                'user' => 'g2it',
                'password' => 'NWVvOXk4N2p2ZHQw'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];