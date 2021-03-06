<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'Onlinescrapfrontend',
            [
                'Locality' => 'list, show, new, create, edit, update, delete',
                'SubCategory' => 'list, show, new, create, edit, update, delete',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Bookings' => 'list, show, new, create, edit, update, delete,change',
                'Category' => 'list, show, new, create, edit, update, delete,selectCategory',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'CartView' => 'list, show, new, create, edit, update, delete,storecart',
                'Collections' => 'list, show, new, create, edit, update, delete'

            ],
            // non-cacheable actions
            [
                'SubCategory' => 'create, update, delete',
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'Category' => 'create, update, delete,selectCategory',
                'CustomerAddress' => 'create, update, delete',
                'Locality' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',
                'Customer' => 'create, update, delete',
                'CartView' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'create, update, delete'
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'CollectionData',
            [
                'Collections' => 'list, show, new, create, edit, update, delete,test',
                'Locality' => 'list, show, new, create, edit, update, delete',
                'SubCategory' => 'list, show, new, create, edit, update, delete',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Bookings' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete,selectCategory',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',


            ],
            // non-cacheable actions
            [
                'SubCategory' => 'create, update, delete',
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'Category' => 'create, update, delete,selectCategory',
                'CustomerAddress' => 'create, update, delete',
                'Locality' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',
                'Customer' => 'create, update, delete',
                'Collections' => 'create, update, delete'
            ]
        );


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'AllBookings',
            [

                'Bookings' => 'list, show, new, create, edit, update, delete,change',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'ScrapCollector',
            [
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Bookings' => 'list, show, new, create, edit, update, delete',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'Customer',
            [

                'Customer' => 'list,show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'CustomerAddress',
            [
                'CustomerAddress' => 'show,list, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'CartView',
            [
                'CartView' => 'storecart,list, show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, new, show, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Bookings' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'CartView' => 'storecart,list, show, new, create, edit, update, delete',
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete'


            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'AddToCart',
            [
                'Category' => 'selectCategory,list, show, new, create, edit, update, delete',
                'Locality' => 'list, show, new, create, edit, update, delete',
                'SubCategory' => 'list, show, new, create, edit, update, delete',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Bookings' => 'list, show, new, create, edit, update, delete,change',

                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'CartView' => 'list, show, new, create, edit, update, delete,storecart',
                'Collections' => 'list, show, new, create, edit, update, delete'

            ],
            // non-cacheable actions
            [

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'CustomerBooking',
            [

                'Bookings' => 'newbooking,createBooking,list, show, new, create, edit, update, delete,change',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RajatDuggal.OnlineScrapApp',
            'CustomerBookingList',
            [

                'Bookings' => 'customerBookingList,newbooking,createBooking,list, show, new, create, edit, update, delete,change',
                'BookingDetails' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete',
                'CustomerAddress' => 'list, show, new, create, edit, update, delete',
                'ScrapCollector' => 'list, show, new, create, edit, update, delete',
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Collections' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'BookingDetails' => 'create, update, delete',
                'Bookings' => 'create, update, delete',
                'ScrapCollector' => 'create, update, delete',

            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        onlinescrapfrontend {   
                            iconIdentifier = online_scrap_app-plugin-onlinescrapfrontend
                            title = LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_online_scrap_app_onlinescrapfrontend.name
                            description = LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_online_scrap_app_onlinescrapfrontend.description
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_onlinescrapfrontend
                            }
                        }
                         allBookings {   
                            iconIdentifier = online_scrap_app-plugin-allbookings
                            title =  List of Bookings
                            description = Renders all bookings 
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_allbookings
                            }
                        }
                        scrapCollector {   
                            iconIdentifier = online_scrap_app-plugin-scrapcollector
                            title =  List of ScrapCollector
                            description = Renders details of Scrap Collector
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_scrapcollector
                            }
                        }
                        customer {   
                            iconIdentifier = online_scrap_app-plugin-customer
                            title =  List of Customer
                            description = Renders details of Customer
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_customer
                            }
                        }
                        customeraddress {   
                            iconIdentifier = online_scrap_app-plugin-customeraddress
                            title =  List of Customer Address
                            description = Renders details of Customer Address
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_customeraddress
                            }
                        }
                        collectiondata {   
                            iconIdentifier = online_scrap_app-plugin-collectiondata
                            title =  List of Collection
                            description = Renders Collection of information
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_collectiondata
                            }
                        }
                        cartview {   
                            iconIdentifier = online_scrap_app-plugin-cartview
                            title =  List of Cart elements
                            description = Renders Cart data
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_cartview
                            }
                        }
                        
                        addtocart {   
                            iconIdentifier = online_scrap_app-plugin-addtocart
                            title =  Select Cart Elements
                            description = Add to Cart
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_addtocart
                            }
                        }
                         customerbooking {   
                            iconIdentifier = online_scrap_app-plugin-customerbooking
                            title =  New Customer Booking
                            description = New Customer Booking
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_customerbooking
                            }
                        }
                          customerbookinglist {   
                            iconIdentifier = online_scrap_app-plugin-customerbooking
                            title =  List Customer Bookings
                            description = List Customer Bookings
                            tt_content_defValues {
                                CType = list
                                list_type = onlinescrapapp_customerbookinglist
                            }
                        }
                    }
                    show = *
                }
           }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'online_scrap_app-plugin-onlinescrapfrontend',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:online_scrap_app/Resources/Public/Icons/user_plugin_onlinescrapfrontend.svg']
        );

    }
);
