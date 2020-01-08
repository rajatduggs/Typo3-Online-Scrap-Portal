<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CollectionsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Collections
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getAmountReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAmount()
        );
    }

    /**
     * @test
     */
    public function setAmountForStringSetsAmount()
    {
        $this->subject->setAmount('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'amount',
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
    public function getCategoryReturnsInitialValueForCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForObjectStorageContainingCategorySetsCategory()
    {
        $category = new \RajatDuggal\OnlineScrapApp\Domain\Model\Category();
        $objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCategory->attach($category);
        $this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCategory,
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCategoryToObjectStorageHoldingCategory()
    {
        $category = new \RajatDuggal\OnlineScrapApp\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->addCategory($category);
    }

    /**
     * @test
     */
    public function removeCategoryFromObjectStorageHoldingCategory()
    {
        $category = new \RajatDuggal\OnlineScrapApp\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->removeCategory($category);
    }

    /**
     * @test
     */
    public function getSubCategoryReturnsInitialValueForSubCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSubCategory()
        );
    }

    /**
     * @test
     */
    public function setSubCategoryForObjectStorageContainingSubCategorySetsSubCategory()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $objectStorageHoldingExactlyOneSubCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSubCategory->attach($subCategory);
        $this->subject->setSubCategory($objectStorageHoldingExactlyOneSubCategory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSubCategory,
            'subCategory',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSubCategoryToObjectStorageHoldingSubCategory()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $subCategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($subCategory));
        $this->inject($this->subject, 'subCategory', $subCategoryObjectStorageMock);

        $this->subject->addSubCategory($subCategory);
    }

    /**
     * @test
     */
    public function removeSubCategoryFromObjectStorageHoldingSubCategory()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();
        $subCategoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($subCategory));
        $this->inject($this->subject, 'subCategory', $subCategoryObjectStorageMock);

        $this->subject->removeSubCategory($subCategory);
    }
}
