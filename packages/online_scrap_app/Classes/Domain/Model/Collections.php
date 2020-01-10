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
     * pricing
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing>
     */
    protected $pricing = null;

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
     * bookings
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings>
     */
    protected $bookings = null;

    /**
     * category
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Category>
     */
    protected $category = null;

    /**
     * customer
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Customer>
     */
    protected $customer = null;

    /**
     * subcategory
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory>
     */
    protected $subcategory = null;

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
        $this->bookings = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->customer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->subcategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a BookingDetails
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $booking
     * @return void
     */
    public function addBooking(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $booking)
    {
        $this->bookings->attach($booking);
    }

    /**
     * Removes a BookingDetails
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookingToRemove The Bookings to be removed
     * @return void
     */
    public function removeBooking(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookingToRemove)
    {
        $this->bookings->detach($bookingToRemove);
    }

    /**
     * Returns the bookings
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings> bookings
     */
    public function getBookings()
    {
        return $this->bookings;
    }

    /**
     * Sets the bookings
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings> $bookings
     * @return void
     */
    public function setBookings(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bookings)
    {
        $this->bookings = $bookings;
    }

    /**
     * Adds a Customer
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer
     * @return void
     */
    public function addCustomer(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer)
    {
        $this->customer->attach($customer);
    }

    /**
     * Removes a Customer
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customerToRemove The Customer to be removed
     * @return void
     */
    public function removeCustomer(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customerToRemove)
    {
        $this->customer->detach($customerToRemove);
    }

    /**
     * Returns the customer
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Customer> $customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the customer
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Customer> $customer
     * @return void
     */
    public function setCustomer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $customer)
    {
        $this->customer = $customer;
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

    /**
     * Returns the pricing
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing> $pricing
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets the pricing
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\Pricing> $pricing
     * @return void
     */
    public function setPricing(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $pricing)
    {
        $this->pricing = $pricing;
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
