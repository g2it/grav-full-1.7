<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/pages/06.our-partners/partners.md',
    'modified' => 1633959748,
    'data' => [
        'header' => [
            'title' => 'Our partners',
            'more_label' => 'more info',
            'menu' => 'Our partners',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'default',
                    'dir' => 'desc'
                ]
            ]
        ],
        'frontmatter' => 'title: \'Our partners\'
more_label: \'more info\'
menu: \'Our partners\'
content:
    items: \'@self.children\'
    order:
        by: default
        dir: desc',
        'markdown' => ''
    ]
];
