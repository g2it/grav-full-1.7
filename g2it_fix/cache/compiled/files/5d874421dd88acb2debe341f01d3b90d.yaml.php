<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/social-seo-metatags/social-seo-metatags.yaml',
    'modified' => 1633959751,
    'data' => [
        'enabled' => true,
        'seo' => [
            'robots' => 'without',
            'length' => 20,
            'taxonomy' => [
                'enabled' => true
            ],
            'page_content' => [
                'enabled' => false
            ]
        ],
        'quote' => [
            'convert_simple' => true
        ],
        'social_pages' => [
            'pages' => [
                'twitter' => [
                    'enabled' => true,
                    'type' => 'summary',
                    'username' => ''
                ],
                'facebook' => [
                    'opengraph' => [
                        'enabled' => true
                    ],
                    'insights' => [
                        'enabled' => false,
                        'appid' => '1234567890'
                    ]
                ]
            ]
        ]
    ]
];
