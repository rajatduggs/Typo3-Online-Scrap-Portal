<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class BookingsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCustomerIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCustomerId()
        );
    }

    /**
     * @test
     */
    public function setCustomerIdForStringSetsCustomerId()
    {
        $this->subject->setCustomerId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'customerId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookingTimeReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBookingTime()
        );
    }

    /**
     * @test
     */
    public function setBookingTimeForDateTimeSetsBookingTime()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBookingTime($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'bookingTime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateTimeReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateTime()
        );
    }

    /**
     * @test
     */
    public function setDateTimeForDateTimeSetsDateTime()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateTime($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateTime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVisitIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVisitId()
        );
    }

    /**
     * @test
     */
    public function setVisitIdForStringSetsVisitId()
    {
        $this->subject->setVisitId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'visitId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderSummaryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrderSummary()
        );
    }

    /**
     * @test
     */
    public function setOrderSummaryForStringSetsOrderSummary()
    {
        $this->subject->setOrderSummary('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orderSummary',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComments()
        );
    }

    /**
     * @test
     */
    public function setCommentsForStringSetsComments()
    {
        $this->subject->setComments('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comments',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getScrapCollectorReturnsInitialValueForScrapCollector()
    {
        self::assertEquals(
            null,
            $this->subject->getScrapCollector()
        );
    }

    /**
     * @test
     */
    public function setScrapCollectorForScrapCollectorSetsScrapCollector()
    {
        $scrapCollectorFixture = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();
        $this->subject->setScrapCollector($scrapCollectorFixture);

        self::assertAttributeEquals(
            $scrapCollectorFixture,
            'scrapCollector',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookingDetailsReturnsInitialValueForBookingDetails()
    {
        self::assertEquals(
            null,
            $this->subject->getBookingDetails()
        );
    }

    /**
     * @test
     */
    public function setBookingDetailsForBookingDetailsSetsBookingDetails()
    {
        $bookingDetailsFixture = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();
        $this->subject->setBookingDetails($bookingDetailsFixture);

        self::assertAttributeEquals(
            $bookingDetailsFixture,
            'bookingDetails',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocalityReturnsInitialValueForLocality()
    {
        self::assertEquals(
            null,
            $this->subject->getLocality()
        );
    }

    /**
     * @test
     */
    public function setLocalityForLocalitySetsLocality()
    {
        $localityFixture = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();
        $this->subject->setLocality($localityFixture);

        self::assertAttributeEquals(
            $localityFixture,
            'locality',
            $this->subject
        );
    }
}
