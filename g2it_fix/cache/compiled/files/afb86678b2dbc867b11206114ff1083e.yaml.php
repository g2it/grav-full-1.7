<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/config/plugins/social-seo-metatags.yaml',
    'modified' => 1633959747,
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
            ],
            'keywords' => [
                'taxonomy' => [
                    'enabled' => true
                ],
                'page_content' => [
                    'enabled' => false
                ],
                'length' => 20
            ]
        ],
        'social_pages' => [
            'pages' => [
                'twitter' => [
                    'enabled' => true,
                    'type' => 'summary'
                ],
                'facebook' => [
                    'enabled' => true,
                    'appid' => '1234567890'
                ]
            ]
        ]
    ]
];
