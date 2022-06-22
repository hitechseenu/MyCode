<?php

$temporaryColumn = array(
    'carousel' => array(
        'exclude' => 1,
        'l10n_mode' => 'mergeIfNotBlank',
        'label' => 'carousel',
        'config' => array (
            'type' => 'inline',
            'foreign_table' => 'tx_rswnrwcarousel_domain_model_carousel',
            'foreign_field' => 'parent',
            'maxitems' => 1,
            'minitems' => 1,
            'appearance' => array(
                'collapseAll' => 0,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => 0,
                'showPossibleLocalizationRecords' => 0,
                'showAllLocalizationLink' => 0
            )
        )
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn
);

$GLOBALS['TCA']['tt_content']['palettes']['carousel'] = array();
$GLOBALS['TCA']['tt_content']['palettes']['carousel']['showitem'] = 'carousel;carousel';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:rswnrw_templates/Resources/Private/Language/locallang.xlf:homepage_carousel',
    'homepage_carousel',
    'EXT:sitepackage/Resources/Public/Backend/Images/slider_small.png' //FIXME
);
$GLOBALS['TCA']['tt_content']['types']['homepage_carousel'] = array(
    'showitem' => '
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;carousel,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended
    '
);
