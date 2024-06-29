<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/pages/09.blog/blog.md',
    'modified' => 1633959748,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'published' => true,
            'twittercardoptions' => 'summary',
            'articleenabled' => false,
            'musiceventenabled' => false,
            'orgaenabled' => false,
            'orga' => [
                'ratingValue' => 2.5
            ],
            'orgaratingenabled' => false,
            'eventenabled' => false,
            'personenabled' => false,
            'restaurantenabled' => false,
            'restaurant' => [
                'acceptsReservations' => 'yes',
                'priceRange' => '$'
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 10,
                'pagination' => true
            ]
        ],
        'frontmatter' => 'title: Blog
published: true
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: \'yes\'
    priceRange: $
content:
    items: \'@self.children\'
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true',
        'markdown' => ''
    ]
];
