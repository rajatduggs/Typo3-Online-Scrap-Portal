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
 * BookingDetails
 */
class BookingDetails extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bookingId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bookingId = '';

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = 0;

    /**
     * category
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category>
     */
    protected $category = null;

    /**
     * Returns the bookingId
     * 
     * @return string $bookingId
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }

    /**
     * Sets the bookingId
     * 
     * @param string $bookingId
     * @return void
     */
    public function setBookingId($bookingId)
    {
        $this->bookingId = $bookingId;
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
    }

    /**
     * Adds a SubCategory
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a SubCategory
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category> category
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
}
