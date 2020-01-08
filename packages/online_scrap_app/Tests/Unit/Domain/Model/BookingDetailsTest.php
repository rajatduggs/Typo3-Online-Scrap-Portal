<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class BookingDetailsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
        $this->subject->setQuantity(12);

        self::assertAttributeEquals(
            12,
            'quantity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubcategoryReturnsInitialValueForSubCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSubcategory()
        );
    }

    /**
     * @test
     */
    public function setSubcategoryForObjectStorageContainingSubCategorySetsSubcategory()
    {
        $subcategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $objectStorageHoldingExactlyOneSubcategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSubcategory->attach($subcategory);
        $this->subject->setSubcategory($objectStorageHoldingExactlyOneSubcategory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSubcategory,
            'subcategory',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSubcategoryToObjectStorageHoldingSubcategory()
    {
        $subcategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $subcategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $subcategoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($subcategory));
        $this->inject($this->subject, 'subcategory', $subcategoryObjectStorageMock);

        $this->subject->addSubcategory($subcategory);
    }

    /**
     * @test
     */
    public function removeSubcategoryFromObjectStorageHoldingSubcategory()
    {
        $subcategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $subcategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $subcategoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($subcategory));
        $this->inject($this->subject, 'subcategory', $subcategoryObjectStorageMock);

        $this->subject->removeSubcategory($subcategory);
    }
}
