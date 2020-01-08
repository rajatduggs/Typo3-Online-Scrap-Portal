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
    protected $customerId = '';

    /**
     * bookingTime
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bookingTime = null;

    /**
     * dateTime
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dateTime = null;

    /**
     * visitId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $visitId = '';

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
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $status = 0;

    /**
     * feedback
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $feedback = '';

    /**
     * scrapCollector
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector
     */
    protected $scrapCollector = null;

    /**
     * bookingDetails
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails
     */
    protected $bookingDetails = null;

    /**
     * locality
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Locality
     */
    protected $locality = null;

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
     * Returns the bookingTime
     * 
     * @return \DateTime $bookingTime
     */
    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    /**
     * Sets the bookingTime
     * 
     * @param \DateTime $bookingTime
     * @return void
     */
    public function setBookingTime(\DateTime $bookingTime)
    {
        $this->bookingTime = $bookingTime;
    }

    /**
     * Returns the dateTime
     * 
     * @return \DateTime $dateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets the dateTime
     * 
     * @param \DateTime $dateTime
     * @return void
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
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
     * Returns the status
     * 
     * @return int $status
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
     * Returns the feedback
     * 
     * @return string $feedback
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Sets the feedback
     * 
     * @param string $feedback
     * @return void
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Returns the bookingDetails
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails bookingDetails
     */
    public function getBookingDetails()
    {
        return $this->bookingDetails;
    }

    /**
     * Sets the bookingDetails
     * 
     * @param string $bookingDetails
     * @return void
     */
    public function setBookingDetails($bookingDetails)
    {
        $this->bookingDetails = $bookingDetails;
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
}
