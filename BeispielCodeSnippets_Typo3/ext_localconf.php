<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Afm.RswnrwCarousel',
            'Carousel',
            [
                'Slide' => 'list',
                'Carousel' => 'list'
            ],
            // non-cacheable actions
            [
                'Slide' => '',
                'Carousel' => ''
            ]
        );
    },
    $_EXTKEY
);
