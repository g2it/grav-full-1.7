<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/pages/01.home/modular.md',
    'modified' => 1633959748,
    'data' => [
        'header' => [
            'title' => 'Home',
            'metadata' => [
                'Title' => 'G2 IT - IT Support & IT Services in Fremantle, Esperance, Perth'
            ],
            'body_classes' => 'home',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_banner',
                        1 => '_services',
                        2 => '_memberships',
                        3 => '_people',
                        4 => '_testimonials',
                        5 => '_partners'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Home
metadata:
    Title: \'G2 IT - IT Support & IT Services in Fremantle, Esperance, Perth\'
body_classes: home
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _banner
            - _services
            - _memberships
            - _people
            - _testimonials
            - _partners',
        'markdown' => ''
    ]
];
