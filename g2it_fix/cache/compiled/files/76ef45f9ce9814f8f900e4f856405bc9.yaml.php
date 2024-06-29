<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/flex-objects/blueprints.yaml',
    'modified' => 1633959750,
    'data' => [
        'name' => 'Flex Objects',
        'slug' => 'flex-objects',
        'type' => 'plugin',
        'version' => '1.1.2',
        'description' => 'Flex Objects plugin allows you to manage Flex Objects in Grav Admin.',
        'icon' => 'list-alt',
        'author' => [
            'name' => 'Trilby Media',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-flex-objects',
        'keywords' => 'grav, plugin, crud, directory',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-flex-objects/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-flex-objects/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.21'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=5.1.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FLEX_OBJECTS.USE_BUILT_IN_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'extra_admin_twig_path' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_FLEX_OBJECTS.EXTRA_ADMIN_TWIG_PATH',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'directories' => [
                    'type' => 'flex-objects',
                    'label' => 'PLUGIN_FLEX_OBJECTS.DIRECTORIES',
                    'array' => true,
                    'ignore_empty' => true,
                    'validate' => [
                        'type' => 'array'
                    ]
                ]
            ]
        ]
    ]
];
