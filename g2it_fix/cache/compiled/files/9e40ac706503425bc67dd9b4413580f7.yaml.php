<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/themes/g2it/blueprints.yaml',
    'modified' => 1633959751,
    'data' => [
        'name' => 'G2IT',
        'description' => 'Grav theme for G2IT website',
        'version' => '1.0.0',
        'icon' => 'globe',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'flatfiledeveloper@gmail.com',
            'url' => 'https://flatfiledeveloper.com'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'copyright' => [
                    'type' => 'textarea',
                    'label' => 'THEME.ADMIN.COPYRIGHT.LABEL',
                    'help' => 'THEME.ADMIN.COPYRIGHT.HELP'
                ],
                'logo' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'preview_images' => true,
                    'label' => 'THEME.ADMIN.LOGO.LABEL',
                    'help' => 'THEME.ADMIN.LOGO.HELP'
                ],
                'favicon' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'preview_images' => true,
                    'label' => 'THEME.ADMIN.FAVICON.LABEL',
                    'help' => 'THEME.ADMIN.FAVICON.HELP'
                ],
                'favicon_apple' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'preview_images' => true,
                    'label' => 'THEME.ADMIN.FAVICON_APPLE'
                ],
                'favicon_72' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'preview_images' => true,
                    'label' => 'THEME.ADMIN.FAVICON_72'
                ],
                'favicon_144' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/images',
                    'preview_images' => true,
                    'label' => 'THEME.ADMIN.FAVICON_144'
                ],
                'navigation' => [
                    'type' => 'section',
                    'title' => 'Navigation',
                    'underline' => true,
                    'fields' => [
                        'navigation' => [
                            'type' => 'list',
                            'label' => 'THEME.ADMIN.NAVIGATION',
                            'style' => 'vertical',
                            'fields' => [
                                '.url' => [
                                    'type' => 'text',
                                    'label' => 'URL'
                                ],
                                '.menu' => [
                                    'type' => 'text',
                                    'label' => 'Menu'
                                ],
                                '.children' => [
                                    'type' => 'list',
                                    'label' => 'THEME.ADMIN.CHILD',
                                    'fields' => [
                                        '.url' => [
                                            'type' => 'pages',
                                            'size' => 'medium',
                                            'classes' => 'fancy',
                                            'label' => 'URL',
                                            'show_all' => true,
                                            'show_modular' => false,
                                            'show_root' => true
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'topbar' => [
                    'type' => 'section',
                    'title' => 'Top bar',
                    'fields' => [
                        'topbar.tools_page' => [
                            'type' => 'pages',
                            'label' => 'Tools page',
                            'show_all' => false,
                            'show_modular' => false,
                            'show_root' => false
                        ],
                        'pay_invoice_page' => [
                            'type' => 'pages',
                            'label' => 'Pay Invoice Page',
                            'show_all' => false,
                            'show_modular' => false,
                            'show_root' => false
                        ]
                    ]
                ],
                'socials' => [
                    'type' => 'section',
                    'title' => 'Socials',
                    'fields' => [
                        'facebook' => [
                            'type' => 'text',
                            'label' => 'Facebook URL'
                        ],
                        'linkedin' => [
                            'type' => 'text',
                            'label' => 'LinkedIn URL'
                        ],
                        'phone' => [
                            'type' => 'text',
                            'label' => 'Phone Number'
                        ]
                    ]
                ],
                'short_description' => [
                    'type' => 'textarea',
                    'label' => 'Short Description on Footer'
                ],
                'communications' => [
                    'type' => 'section',
                    'title' => 'FOOTER',
                    'underline' => true,
                    'fields' => [
                        'communications.headline' => [
                            'type' => 'text',
                            'label' => 'Headline'
                        ],
                        'communications.hotline' => [
                            'type' => 'text',
                            'label' => 'Hotline'
                        ],
                        'communications.email' => [
                            'type' => 'text',
                            'label' => 'Email'
                        ],
                        'communications.phone' => [
                            'type' => 'text',
                            'label' => 'Phone'
                        ]
                    ]
                ],
                'icons' => [
                    'type' => 'section',
                    'title' => 'Icons',
                    'fields' => [
                        'icons.icon_1' => [
                            'type' => 'filepicker',
                            'folder' => 'theme@:/images',
                            'preview_images' => true,
                            'label' => 'Icon 1'
                        ],
                        'icons.icon_1_alt' => [
                            'type' => 'text',
                            'label' => 'Alternative Text for icon 1'
                        ],
                        'icons.icon_2' => [
                            'type' => 'filepicker',
                            'folder' => 'theme@:/images',
                            'preview_images' => true,
                            'label' => 'Icon 2'
                        ],
                        'icons.icon_2_alt' => [
                            'type' => 'text',
                            'label' => 'Alternative Text for icon 2'
                        ]
                    ]
                ],
                'locations' => [
                    'type' => 'section',
                    'title' => 'LOCATIONS',
                    'underline' => true,
                    'fields' => [
                        'locations.headline' => [
                            'type' => 'text',
                            'label' => 'Headline'
                        ],
                        'locations.items' => [
                            'type' => 'list',
                            'label' => 'Items',
                            'fields' => [
                                '.name' => [
                                    'label' => 'Name',
                                    'type' => 'text'
                                ],
                                '.address' => [
                                    'label' => 'Address',
                                    'type' => 'textarea'
                                ]
                            ]
                        ]
                    ]
                ],
                'info' => [
                    'type' => 'section',
                    'title' => 'INFO',
                    'underline' => true,
                    'fields' => [
                        'info.headline' => [
                            'type' => 'text',
                            'label' => 'Headline'
                        ],
                        'info.items' => [
                            'type' => 'list',
                            'label' => 'Items',
                            'fields' => [
                                '.label' => [
                                    'label' => 'Label',
                                    'type' => 'text'
                                ],
                                '.url' => [
                                    'label' => 'URL',
                                    'type' => 'text'
                                ]
                            ]
                        ]
                    ]
                ],
                'popup' => [
                    'type' => 'section',
                    'title' => 'POP-UP',
                    'underline' => true,
                    'fields' => [
                        'popup.show' => [
                            'type' => 'toggle',
                            'label' => 'Show',
                            'highlight' => 1,
                            'options' => [
                                'show' => 'Show',
                                'hide' => 'Hide'
                            ]
                        ],
                        'popup.title' => [
                            'type' => 'text',
                            'label' => 'Title'
                        ],
                        'popup.content' => [
                            'type' => 'editor',
                            'label' => 'Content'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
