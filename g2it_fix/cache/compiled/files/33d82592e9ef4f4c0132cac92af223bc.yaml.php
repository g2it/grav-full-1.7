<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/plugins/social-seo-metatags/languages.yaml',
    'modified' => 1633959751,
    'data' => [
        'en' => [
            'PLUGINS' => [
                'SOCIAL_SEO_METATAGS' => [
                    'PLUGIN_NAME' => 'Social SEO Meta Tags',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'PLUGIN_ACTIVE' => 'Active',
                    'PLUGIN_INACTIVE' => 'Inactive',
                    'PLUGIN_ACTIVE_HELP' => 'This option is used to (de-)activate this plugin on a per-page basis.',
                    'YES' => 'Yes',
                    'NO' => 'No',
                    'GENERAL' => [
                        'NAME' => 'General',
                        'ROBOTS' => [
                            'NAME' => 'Default Robots Meta-Tag',
                            'WITHOUT' => 'Without meta-tag',
                            'HELP' => 'Default value of the meta-tag Robots'
                        ],
                        'KEYWORDS' => [
                            'TAXONOMY' => [
                                'NAME' => 'Use Taxonomy Keywords',
                                'HELP' => 'Enable using of Taxonomy Keywords for Meta-Tags'
                            ],
                            'PAGE_CONTENT' => [
                                'NAME' => 'Use Page Content Keywords',
                                'HELP' => 'Enable using of Page content Keywords for Meta-Tags (strong and emphasis)'
                            ],
                            'LENGTH' => [
                                'NAME' => 'Number of keywords',
                                'HELP' => 'Maximum number of keywords to display in meta-tag'
                            ]
                        ],
                        'QUOTE' => [
                            'SIMPLE_RAW' => [
                                'NAME' => 'Convert simple quote to html entity (using code #039;)',
                                'HELP' => 'For Twitter sharing, raw simple quote may be necessary.'
                            ]
                        ],
                        'DEFAULT' => [
                            'IMAGE' => [
                                'LABEL' => 'Default image',
                                'HELP' => 'This image will be used if no other image is available in the Page.'
                            ]
                        ]
                    ],
                    'TWITTER' => [
                        'NAME' => 'Twitter Cards',
                        'ENABLED' => 'Twitter Cards active',
                        'HELP' => 'Share with Twitter Cards',
                        'TYPE' => 'Card Type',
                        'TYPE_HELP' => 'Summary Card with Large Image or Short Summary',
                        'TYPE_CARDS' => [
                            'LARGE' => 'Summary Card with Large Image',
                            'SUMMARY' => 'Summary Card'
                        ],
                        'ABOUTME' => 'Use AboutMe Plugin',
                        'USERNAME' => 'Username',
                        'USERNAME_HELP' => 'If you not use AboutMe plugin, please define your twitter username (@username)',
                        'USERNAME_VALIDATION' => 'Only letters (A-Z) and numbers (0-9), up to 15 characters.'
                    ],
                    'FACEBOOK' => [
                        'NAME' => 'Facebook',
                        'OPENGRAPH' => [
                            'ENABLED' => 'Facebook Open Graph'
                        ],
                        'INSIGHTS' => [
                            'ENABLED' => 'Facebook Insights',
                            'APPID' => 'App ID',
                            'APPID_HELP' => 'The App ID you get from the Facebook Developers page (https://developers.facebook.com/apps). Need Facebook Insights enabled.'
                        ]
                    ]
                ]
            ]
        ],
        'fr' => [
            'PLUGINS' => [
                'SOCIAL_SEO_METATAGS' => [
                    'PLUGIN_NAME' => 'Social SEO Meta Tags',
                    'PLUGIN_STATUS' => 'Statut du plugin',
                    'PLUGIN_ACTIVE' => 'Actif',
                    'PLUGIN_INACTIVE' => 'Inactif',
                    'PLUGIN_ACTIVE_HELP' => 'Cette option permet d’activer ou non le plugin sur une base par page.',
                    'YES' => 'Oui',
                    'NO' => 'Non',
                    'GENERAL' => [
                        'NAME' => 'Général',
                        'ROBOTS' => [
                            'NAME' => 'Meta-Tag Robots par défaut',
                            'WITHOUT' => 'Sans meta-tag',
                            'HELP' => 'Valeur du meta-tag Robots par défaut'
                        ],
                        'KEYWORDS' => [
                            'TAXONOMY' => [
                                'NAME' => 'Utiliser les mots-clés Taxonomy',
                                'HELP' => 'Active l\'utilisation de la liste des mots clés Taxonomy pour les Meta-Tags'
                            ],
                            'PAGE_CONTENT' => [
                                'NAME' => 'Utiliser les mots-clés du contenu de la page',
                                'HELP' => 'Active l\'utilisation de la liste des mots-clés du contenu de la page (strong et em) pour les Meta-Tags'
                            ],
                            'LENGTH' => [
                                'NAME' => 'Nombre de mots-clés',
                                'HELP' => 'Nombre de mots-clés maximal à afficher dans la meta-tag'
                            ]
                        ],
                        'QUOTE' => [
                            'SIMPLE_RAW' => [
                                'NAME' => 'Convertir les guillemets simples en entité HTML (utilisant code #039;)',
                                'HELP' => 'Pour les partages Twitter, utiliser les guillemets simple brut est nécessaire.'
                            ]
                        ],
                        'DEFAULT' => [
                            'IMAGE' => [
                                'LABEL' => 'Image par défaut',
                                'HELP' => 'Cette image sera utilisée si aucune autre image n’existe dans la Page.'
                            ]
                        ]
                    ],
                    'TWITTER' => [
                        'NAME' => 'Cartes Twitter',
                        'ENABLED' => 'Cartes Twitter activées',
                        'HELP' => 'Partager avec les cartes Twitter',
                        'TYPE' => 'Type de carte',
                        'TYPE_HELP' => 'Carte de résumé avec grande image ou résumé court',
                        'TYPE_CARDS' => [
                            'LARGE' => 'Carte de résumé avec grande image',
                            'SUMMARY' => 'Carte de résumé'
                        ],
                        'ABOUTME' => 'Utiliser le plugin AboutMe',
                        'USERNAME' => 'Nom d\'utilisateur',
                        'USERNAME_HELP' => 'Si le plugin AboutMe n’est pas utilisé, veuillez définir le nom d’utilisateur Twitter SVP',
                        'USERNAME_VALIDATION' => 'Uniquement des lettres (A-Z) et nombres (0-9), maximum 15 caractères.'
                    ],
                    'FACEBOOK' => [
                        'NAME' => 'Facebook',
                        'OPENGRAPH' => [
                            'ENABLED' => 'Facebook Open Graph'
                        ],
                        'INSIGHTS' => [
                            'ENABLED' => 'Facebook Insights',
                            'APPID' => 'ID d’application',
                            'APPID_HELP' => 'L’ID d’application pour se connecter à la page Développeurs Facebook (https://developers.facebook.com/apps). Nécessite Facebook Insights activé.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
