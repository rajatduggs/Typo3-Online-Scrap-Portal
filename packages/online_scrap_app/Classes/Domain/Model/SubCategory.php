<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Model;


/***
 *
 * This file is part of the "Online Scrap App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Rajat Duggal <rajat.duggal@hof-university.de>
 *
 ***/
/**
 * SubCategory
 */
class SubCategory extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * pricing
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing
     */
    protected $pricing = null;

    /**
     * subCategoryId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $subCategoryId = '';

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * Returns the subCategoryId
     * 
     * @return string $subCategoryId
     */
    public function getSubCategoryId()
    {
        return $this->subCategoryId;
    }

    /**
     * Sets the subCategoryId
     * 
     * @param string $subCategoryId
     * @return void
     */
    public function setSubCategoryId($subCategoryId)
    {
        $this->subCategoryId = $subCategoryId;
    }

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
    }

    /**
     * Returns the pricing
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricing
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets the pricing
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricing
     * @return void
     */
    public function setPricing(\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricing)
    {
        $this->pricing = $pricing;
    }

    /**
     * Adds a Pricing
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricing
     * @return void
     */
    public function addPricing(\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricing)
    {
        $this->pricing->attach($pricing);
    }

    /**
     * Removes a Pricing
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricingToRemove The Pricing to be removed
     * @return void
     */
    public function removePricing(\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing $pricingToRemove)
    {
        $this->pricing->detach($pricingToRemove);
    }
}
