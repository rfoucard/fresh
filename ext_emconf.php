<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Fresh Backend',
    'description' => 'Tweaks the backend CSS of TYPO3',
    'category' => 'system',
    'state' => 'stable',
    'author' => 'Rachel Foucards',
    'author_email' => 'rachel.foucard@typo3.org',
    'author_company' => '',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.0.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
