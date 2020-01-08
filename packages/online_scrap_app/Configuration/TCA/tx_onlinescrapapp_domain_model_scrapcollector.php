<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector',
        'label' => 'collector_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'collector_id,name,phone_number,email_id,gender,bank_name,uniform_size,cap',
        'iconfile' => 'EXT:online_scrap_app/Resources/Public/Icons/tx_onlinescrapapp_domain_model_scrapcollector.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, collector_id, name, phone_number, email_id, social_security_number, gender, birth_date, account_number, bank_name, uniform_size, cap, issue_date, id_expiry, status, rating, locality',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, collector_id, name, phone_number, email_id, social_security_number, gender, birth_date, account_number, bank_name, uniform_size, cap, issue_date, id_expiry, status, rating, locality, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_onlinescrapapp_domain_model_scrapcollector',
                'foreign_table_where' => 'AND {#tx_onlinescrapapp_domain_model_scrapcollector}.{#pid}=###CURRENT_PID### AND {#tx_onlinescrapapp_domain_model_scrapcollector}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'collector_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.collector_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'phone_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.phone_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'email_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.email_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'social_security_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.social_security_number',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'gender' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.gender',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'birth_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.birth_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => null,
            ],
        ],
        'account_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.account_number',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'bank_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.bank_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'uniform_size' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.uniform_size',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'cap' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.cap',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'issue_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.issue_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => null,
            ],
        ],
        'id_expiry' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.id_expiry',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => null,
            ],
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.status',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'rating' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.rating',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'locality' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_scrapcollector.locality',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_onlinescrapapp_domain_model_locality',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
