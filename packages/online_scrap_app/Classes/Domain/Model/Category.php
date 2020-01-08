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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * categoryId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $categoryId = '';

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * subcategory
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory>
     */
    protected $subcategory = null;

    /**
     * Returns the categoryId
     * 
     * @return string $categoryId
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets the categoryId
     * 
     * @param string $categoryId
     * @return void
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
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
        $this->subcategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
}
