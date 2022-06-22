<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Afm.RswnrwCarousel',
            'Carousel',
            'Homepage Carousel'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Homepage Carousel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rswnrwcarousel_domain_model_slide', 'EXT:rswnrw_carousel/Resources/Private/Language/locallang_csh_tx_rswnrwcarousel_domain_model_slide.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rswnrwcarousel_domain_model_slide');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rswnrwcarousel_domain_model_carousel', 'EXT:rswnrw_carousel/Resources/Private/Language/locallang_csh_tx_rswnrwcarousel_domain_model_carousel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rswnrwcarousel_domain_model_carousel');

    },
    $_EXTKEY
);
