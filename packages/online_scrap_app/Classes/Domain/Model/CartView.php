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
 * Facts
 */
class CartView extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = '';

    /**
     * category
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category>
     */
    protected $category = null;

    /**
     * subcategory
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory>
     */
    protected $subcategory = null;

    /**
     * locality
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Locality>
     */
    protected $locality = null;

    /**
     * Returns the quantity
     * 
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param string $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->subcategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->locality = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Category
     * 
     * @param Category $category
     * @return void
     */
    public function addCategory(Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     * 
     * @param Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Adds a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategory
     * @return void
     */
    public function addSubcategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategory)
    {
        $this->subcategory->attach($subcategory);
    }

    /**
     * Removes a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategoryToRemove The SubCategory to be removed
     * @return void
     */
    public function removeSubcategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subcategoryToRemove)
    {
        $this->subcategory->detach($subcategoryToRemove);
    }

    /**
     * Adds a Locality
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function addLocality(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->locality->attach($locality);
    }

    /**
     * Removes a Locality
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $localityToRemove The Locality to be removed
     * @return void
     */
    public function removeLocality(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $localityToRemove)
    {
        $this->locality->detach($localityToRemove);
    }

    /**
     * Returns the category
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the subcategory
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Sets the subcategory
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subcategory
     * @return void
     */
    public function setSubcategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $subcategory)
    {
        $this->subcategory = $subcategory;
    }

    /**
     * Returns the locality
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Locality> $locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Sets the locality
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Locality> $locality
     * @return void
     */
    public function setLocality(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $locality)
    {
        $this->locality = $locality;
    }
}
