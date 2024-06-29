<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/g2it_fix/user/pages/08.contact-us/contact.md',
    'modified' => 1633959748,
    'data' => [
        'header' => [
            'title' => 'Contact us',
            'menu' => 'Contact us',
            'form_subheading' => 'General enquiries should be submitted by completing the form below and clicking the submit button.',
            'api_key' => 'AIzaSyC8AUGtxwRSMXuu4OmZLe4jHV08xI8OmqU',
            'locations' => [
                0 => [
                    'title' => 'Esperance Office',
                    'address' => 'Unit 2 / 58 Windich Street,<br>Esperance WA 6450',
                    'lat' => '-33.857572',
                    'long' => '121.893505'
                ],
                1 => [
                    'title' => 'Perth Office',
                    'address' => 'Unit 3 / 16 Mews Road,<br>Fremantle WA 6160',
                    'lat' => '-32.06335551',
                    'long' => '115.74980199'
                ]
            ],
            'map_center' => [
                'lat' => '-32.41986',
                'long' => '118.687897'
            ],
            'form' => [
                'name' => 'contact',
                'fields' => [
                    0 => [
                        'name' => 'fname',
                        'label' => 'First Name',
                        'show_label' => false,
                        'placeholder' => 'First Name',
                        'autocomplete' => 'on',
                        'classes' => 'form-control name icon',
                        'wrapper_classes' => 'form-group',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'lname',
                        'label' => 'Last Name',
                        'show_label' => false,
                        'placeholder' => 'Last Name',
                        'autocomplete' => 'on',
                        'classes' => 'form-control last-name icon',
                        'wrapper_classes' => 'form-group',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'phone',
                        'label' => 'Phone',
                        'show_label' => false,
                        'placeholder' => 'Phone',
                        'autocomplete' => 'on',
                        'classes' => 'form-control phone icon',
                        'wrapper_classes' => 'form-group',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
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
                    4 => [
                        'name' => 'detail',
                        'label' => 'Enquiry Details',
                        'show_label' => false,
                        'placeholder' => 'Enquiry Details',
                        'type' => 'textarea',
                        'classes' => 'form-control',
                        'wrapper_classes' => 'form-group',
                        'rows' => 7,
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    5 => [
                        'name' => 'honeypot',
                        'type' => 'honeypot'
                    ],
                    6 => [
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
                        'value' => 'Submit',
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
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Contact us\'
menu: \'Contact us\'
form_subheading: \'General enquiries should be submitted by completing the form below and clicking the submit button.\'
api_key: AIzaSyC8AUGtxwRSMXuu4OmZLe4jHV08xI8OmqU
locations:
    -
        title: \'Esperance Office\'
        address: \'Unit 2 / 58 Windich Street,<br>Esperance WA 6450\'
        lat: \'-33.857572\'
        long: \'121.893505\'
    -
        title: \'Perth Office\'
        address: \'Unit 3 / 16 Mews Road,<br>Fremantle WA 6160\'
        lat: \'-32.06335551\'
        long: \'115.74980199\'
map_center:
    lat: \'-32.41986\'
    long: \'118.687897\'
form:
    name: contact
    fields:
        -
            name: fname
            label: \'First Name\'
            show_label: false
            placeholder: \'First Name\'
            autocomplete: \'on\'
            classes: \'form-control name icon\'
            wrapper_classes: form-group
            type: text
            validate:
                required: true
        -
            name: lname
            label: \'Last Name\'
            show_label: false
            placeholder: \'Last Name\'
            autocomplete: \'on\'
            classes: \'form-control last-name icon\'
            wrapper_classes: form-group
            type: text
            validate:
                required: true
        -
            name: phone
            label: Phone
            show_label: false
            placeholder: Phone
            autocomplete: \'on\'
            classes: \'form-control phone icon\'
            wrapper_classes: form-group
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            show_label: false
            placeholder: E-mail
            classes: \'form-control email icon\'
            wrapper_classes: form-group
            type: email
            validate:
                required: true
        -
            name: detail
            label: \'Enquiry Details\'
            show_label: false
            placeholder: \'Enquiry Details\'
            type: textarea
            classes: form-control
            wrapper_classes: form-group
            rows: 7
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
        -
            type: submit
            value: Submit
            classes: \'btn btn-primary btn-block\'
    process:
        -
            captcha:
                recaptcha_secret: 6LeKImQUAAAAAAZHC9WSHEih-YaE39JPBNb9-YDp
        -
            email:
                from: \'{{ config.plugins.email.from }}\'
                to:
                    - \'{{ config.plugins.email.to }}\'
                    - \'{{ form.value.email }}\'
                subject: \'[Site Contact Form] {{ form.value.name|e }}\'
                body: \'{% include \'\'forms/data.html.twig\'\' %}\'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
        -
            display: thankyou',
        'markdown' => 'We welcome your feedback, suggestions or questions about our website, our services or any other aspect of our business. This valuable information helps us to ensure our services remain at the high standard our clients have come to expect, and meet all expectations. Call us on **1300 325 487**'
    ]
];
