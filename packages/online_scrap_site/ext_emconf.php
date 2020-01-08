<?php

/**
 * Extension Manager/Repository config file for ext "online_scrap_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Online Scrap Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'RajatDuggal\\OnlineScrapSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Rajat Duggal',
    'author_email' => 'rajat.duggal@hof-university.de',
    'author_company' => 'Rajat Duggal',
    'version' => '1.0.0',
];
