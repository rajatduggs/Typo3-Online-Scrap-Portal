<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'Onlinescrapfrontend',
            'OnlineScrap'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'AllBookings',
            'AllBookings'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'CollectionData',
            'CollectionData'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'ScrapCollector',
            'ScrapCollector'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'Customer',
            'Customer'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'CustomerAddress',
            'CustomerAddress'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'CartView',
            'CartView'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'AddToCart',
            'AddToCart'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RajatDuggal.OnlineScrapApp',
            'CustomerBooking',
            'CustomerBooking'
        );


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('online_scrap_app', 'Configuration/TypoScript', 'Online Scrap App');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_subcategory', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_subcategory.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_subcategory');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_bookingdetails', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_bookingdetails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_bookingdetails');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_bookings', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_bookings.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_bookings');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_category', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_customeraddress', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_customeraddress.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_customeraddress');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_locality', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_locality.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_locality');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_scrapcollector', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_scrapcollector.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_scrapcollector');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_customer', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_customer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_customer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_cartview`', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_cartview.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_cartview');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_onlinescrapapp_domain_model_collections', 'EXT:online_scrap_app/Resources/Private/Language/locallang_csh_tx_onlinescrapapp_domain_model_collections.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_onlinescrapapp_domain_model_collections');



    }
);
