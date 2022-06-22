<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,

        //'languageField' => 'sys_language_uid',
        //'transOrigPointerField' => 'l10n_parent',
        //'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,link0,link0_text,link1,link1_text,link2,link2_text,link3,link3_text,background_image,parent,slides,',
        'iconfile' => 'EXT:rswnrw_carousel/Resources/Public/Icons/tx_rswnrwcarousel_domain_model_carousel.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, link0, link0_text, link1, link1_text, link2, link2_text, link3, link3_text, background_image, parent, slides',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, link0, link0_text, link1, link1_text, link2, link2_text, link3, link3_text, background_image, parent, slides, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_rswnrwcarousel_domain_model_carousel',
                'foreign_table_where' => 'AND tx_rswnrwcarousel_domain_model_carousel.pid=###CURRENT_PID### AND tx_rswnrwcarousel_domain_model_carousel.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],

	    'title' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link0' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link0',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link0_text' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link0_text',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link1' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link1',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link1_text' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link1_text',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link2' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link2',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link2_text' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link2_text',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link3' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link3',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'link3_text' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.link3_text',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'background_image' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.background_image',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'background_image',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	        
	    ],
	    'parent' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.parent',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	        
	    ],
	    'slides' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:rswnrw_carousel/Resources/Private/Language/locallang_db.xlf:tx_rswnrwcarousel_domain_model_carousel.slides',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_rswnrwcarousel_domain_model_slide',
			    'foreign_field' => 'carousel',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],

	    ],
        
    ],
];
