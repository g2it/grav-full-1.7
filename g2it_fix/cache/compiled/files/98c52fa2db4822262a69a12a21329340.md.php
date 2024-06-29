<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/pages/01.home/_testimonials/testimonials.md',
    'modified' => 1633959748,
    'data' => [
        'header' => [
            'title' => 'What our clients say',
            'cache_enable' => false,
            'form_heading' => 'Contact us now',
            'form_subheading' => 'and get <strong>free consultation</strong> about best solution special for you',
            'form' => [
                'action' => '/home',
                'name' => 'simple-contact',
                'template' => 'form-messages',
                'refresh_prevention' => true,
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Name',
                        'show_label' => false,
                        'placeholder' => 'Name',
                        'autocomplete' => 'on',
                        'classes' => 'form-control name icon',
                        'wrapper_classes' => 'form-group',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'show_label' => false,
                        'placeholder' => 'E-mail',
                        'classes' => 'form-control email icon',
                        'wrapper_classes' => 'form-group',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'honeypot',
                        'type' => 'honeypot'
                    ],
                    3 => [
                        'name' => 'g-recaptcha-response',
                        'label' => 'Captcha',
                        'show_label' => false,
                        'wrapper_classes' => 'form-group',
                        'classes' => 'form-control',
                        'type' => 'captcha',
                        'recaptcha_site_key' => '6LeKImQUAAAAADAkqqt79W1yw0CldQn-YWVM88kC',
                        'recaptcha_not_validated' => 'Captcha not valid!',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Get free expertise',
                        'classes' => 'btn btn-primary btn-block'
                    ]
                ],
                'process' => [
                    0 => [
                        'captcha' => [
                            'recaptcha_secret' => '6LeKImQUAAAAAAZHC9WSHEih-YaE39JPBNb9-YDp'
                        ]
                    ],
                    1 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.to }}',
                                1 => '{{ form.value.email }}'
                            ],
                            'subject' => '[Site Contact Form] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    2 => [
                        'save' => [
                            'fileprefix' => 'contact-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    3 => [
                        'message' => 'Thank you for getting in touch!'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: What our clients say
cache_enable: false

form_heading: Contact us now
form_subheading: and get <strong>free consultation</strong> about best solution special for you

form:
    action: \'/home\'
    name: simple-contact
    template: form-messages
    refresh_prevention: true

    fields:
        - name: name
          label: Name
          show_label: false
          placeholder: Name
          autocomplete: on
          classes: form-control name icon
          wrapper_classes: form-group
          type: text
          validate:
            required: true

        - name: email
          label: Email
          show_label: false
          placeholder: E-mail
          classes: form-control email icon
          wrapper_classes: form-group
          type: email
          validate:
            required: true
        -
            name: honeypot
            type: honeypot

        -
            name: g-recaptcha-response
            label: Captcha
            show_label: false
            wrapper_classes: form-group
            classes: form-control
            type: captcha
            recaptcha_site_key: 6LeKImQUAAAAADAkqqt79W1yw0CldQn-YWVM88kC
            recaptcha_not_validated: \'Captcha not valid!\'
            validate:
                required: true

    buttons:
        - type: submit
          value: Get free expertise
          classes: btn btn-primary btn-block

    process:
        -
            captcha:
                recaptcha_secret: 6LeKImQUAAAAAAZHC9WSHEih-YaE39JPBNb9-YDp
        - email:
            from: \'{{ config.plugins.email.from }}\'
            to: [\'{{ config.plugins.email.to }}\', \'{{ form.value.email }}\']
            subject: \'[Site Contact Form] {{ form.value.name|e }}\'
            body: \'{% include \'\'forms/data.html.twig\'\' %}\'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - message: Thank you for getting in touch!',
        'markdown' => ''
    ]
];
