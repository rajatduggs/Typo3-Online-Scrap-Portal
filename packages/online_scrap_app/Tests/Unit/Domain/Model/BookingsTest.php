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
    public function getBookingTimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBookingTime()
        );
    }

    /**
     * @test
     */
    public function setBookingTimeForStringSetsBookingTime()
    {
        $this->subject->setBookingTime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bookingTime',
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
    public function getBookingIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBookingId()
        );
    }

    /**
     * @test
     */
    public function setBookingIdForStringSetsBookingId()
    {
        $this->subject->setBookingId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bookingId',
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
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBookingDetails()
        );
    }

    /**
     * @test
     */
    public function setBookingDetailsForObjectStorageContainingBookingDetailsSetsBookingDetails()
    {
        $bookingDetail = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();
        $objectStorageHoldingExactlyOneBookingDetails = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBookingDetails->attach($bookingDetail);
        $this->subject->setBookingDetails($objectStorageHoldingExactlyOneBookingDetails);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBookingDetails,
            'bookingDetails',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBookingDetailToObjectStorageHoldingBookingDetails()
    {
        $bookingDetail = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();
        $bookingDetailsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($bookingDetail));
        $this->inject($this->subject, 'bookingDetails', $bookingDetailsObjectStorageMock);

        $this->subject->addBookingDetail($bookingDetail);
    }

    /**
     * @test
     */
    public function removeBookingDetailFromObjectStorageHoldingBookingDetails()
    {
        $bookingDetail = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();
        $bookingDetailsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bookingDetail));
        $this->inject($this->subject, 'bookingDetails', $bookingDetailsObjectStorageMock);

        $this->subject->removeBookingDetail($bookingDetail);
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
