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
 * Bookings
 */
class Bookings extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * customerId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $customerId = 0;

    /**
     * bookingTime
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bookingTime = null;

    /**
     * visitId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $visitId = 0;

    /**
     * orderSummary
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $orderSummary = '';

    /**
     * comments
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $comments = '';

    /**
     * status
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $status = 0;

    /**
     * scrapCollector
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector
     */
    protected $scrapCollector = null;

    /**
     * bookingDetails
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails>
     */
    protected $bookingDetails = null;

    /**
     * locality
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Locality
     */
    protected $locality = null;

    /**
     * bookingId
     * 
     * @var string
     */
    protected $bookingId = '';

    /**
     * Returns the customerId
     * 
     * @return string $customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets the customerId
     * 
     * @param string $customerId
     * @return void
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns the visitId
     * 
     * @return string $visitId
     */
    public function getVisitId()
    {
        return $this->visitId;
    }

    /**
     * Sets the visitId
     * 
     * @param string $visitId
     * @return void
     */
    public function setVisitId($visitId)
    {
        $this->visitId = $visitId;
    }

    /**
     * Returns the orderSummary
     * 
     * @return string $orderSummary
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * Sets the orderSummary
     * 
     * @param string $orderSummary
     * @return void
     */
    public function setOrderSummary($orderSummary)
    {
        $this->orderSummary = $orderSummary;
    }

    /**
     * Returns the comments
     * 
     * @return string $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments
     * 
     * @param string $comments
     * @return void
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Returns the scrapCollector
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector scrapCollector
     */
    public function getScrapCollector()
    {
        return $this->scrapCollector;
    }

    /**
     * Sets the scrapCollector
     * 
     * @param string $scrapCollector
     * @return void
     */
    public function setScrapCollector($scrapCollector)
    {
        $this->scrapCollector = $scrapCollector;
    }

    /**
     * Returns the locality
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Sets the locality
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function setLocality(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->locality = $locality;
    }

    /**
     * Returns the status
     * 
     * @return string status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param int $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the bookingTime
     * 
     * @return string bookingTime
     */
    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    /**
     * Sets the bookingTime
     * 
     * @param string $bookingTime
     * @return void
     */
    public function setBookingTime(string $bookingTime)
    {
        $this->bookingTime = $bookingTime;
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
        $this->bookingDetails = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
}
