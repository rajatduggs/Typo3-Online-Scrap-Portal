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
 * Collections
 */
class Collections extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = 0;

    /**
     * amount
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $amount = '';

    /**
     * bookingDetails
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails>
     */
    protected $bookingDetails = null;

    /**
     * category
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category>
     */
    protected $category = null;

    /**
     * subCategory
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory>
     */
    protected $subCategory = null;

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
        $this->bookingDetails = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->subCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns the amount
     * 
     * @return string $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount
     * 
     * @param string $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Adds a BookingDetails
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetail
     * @return void
     */
    public function addBookingDetail(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetail)
    {
        $this->bookingDetails->attach($bookingDetail);
    }

    /**
     * Removes a BookingDetails
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetailToRemove The BookingDetails to be removed
     * @return void
     */
    public function removeBookingDetail(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetailToRemove)
    {
        $this->bookingDetails->detach($bookingDetailToRemove);
    }

    /**
     * Returns the bookingDetails
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails> $bookingDetails
     */
    public function getBookingDetails()
    {
        return $this->bookingDetails;
    }

    /**
     * Sets the bookingDetails
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails> $bookingDetails
     * @return void
     */
    public function setBookingDetails(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bookingDetails)
    {
        $this->bookingDetails = $bookingDetails;
    }

    /**
     * Adds a Category
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
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
     * Adds a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subCategory
     * @return void
     */
    public function addSubCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subCategory)
    {
        $this->subCategory->attach($subCategory);
    }

    /**
     * Removes a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subCategoryToRemove The SubCategory to be removed
     * @return void
     */
    public function removeSubCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory $subCategoryToRemove)
    {
        $this->subCategory->detach($subCategoryToRemove);
    }

    /**
     * Returns the subCategory
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subCategory
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Sets the subCategory
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory> $subCategory
     * @return void
     */
    public function setSubCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $subCategory)
    {
        $this->subCategory = $subCategory;
    }
}
