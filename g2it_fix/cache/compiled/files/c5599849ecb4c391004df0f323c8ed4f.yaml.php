<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/onwebchat/blueprints.yaml',
    'modified' => 1633959750,
    'data' => [
        'name' => 'OnWebChat',
        'version' => 1.2,
        'description' => 'Displays a Live Chat Box from OnWebChat on your website',
        'icon' => 'comments-o',
        'author' => [
            'name' => 'Rich Starkie',
            'email' => 'rich@optikwebcreative.com',
            'url' => 'http://www.optikwebcreative.com'
        ],
        'homepage' => 'http://www.optikwebcreative.com/blog/grav-onwebchat-plugin',
        'demo' => 'http://www.optikwebcreative.com',
        'keywords' => 'plugin, live, chat, onwebchat, interaction',
        'bugs' => 'https://github.com/OptikWebCreative/onWebChat/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'default_active' => [
                    'type' => 'toggle',
                    'label' => 'Active on pages by default',
                    'help' => 'Should onWebChat be active on every page unless specified in its page configuration?',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'chatid' => [
                    'type' => 'text',
                    'label' => 'Chat ID',
                    'size' => 'medium',
                    'placeholder' => 'Enter Your Chat ID from your OnWebChat Settings Page',
                    'help' => 'Enter Your Chat ID from your OnWebChat Settings Page'
                ]
            ]
        ]
    ]
];
