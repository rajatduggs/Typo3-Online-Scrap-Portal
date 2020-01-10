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
    public function getBookingsReturnsInitialValueForBookings()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBookings()
        );
    }

    /**
     * @test
     */
    public function setBookingsForObjectStorageContainingBookingsSetsBookings()
    {
        $booking = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();
        $objectStorageHoldingExactlyOneBookings = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBookings->attach($booking);
        $this->subject->setBookings($objectStorageHoldingExactlyOneBookings);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBookings,
            'bookings',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBookingToObjectStorageHoldingBookings()
    {
        $booking = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();
        $bookingsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($booking));
        $this->inject($this->subject, 'bookings', $bookingsObjectStorageMock);

        $this->subject->addBooking($booking);
    }

    /**
     * @test
     */
    public function removeBookingFromObjectStorageHoldingBookings()
    {
        $booking = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();
        $bookingsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($booking));
        $this->inject($this->subject, 'bookings', $bookingsObjectStorageMock);

        $this->subject->removeBooking($booking);
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
    public function getCustomerReturnsInitialValueForCustomer()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCustomer()
        );
    }

    /**
     * @test
     */
    public function setCustomerForObjectStorageContainingCustomerSetsCustomer()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();
        $objectStorageHoldingExactlyOneCustomer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCustomer->attach($customer);
        $this->subject->setCustomer($objectStorageHoldingExactlyOneCustomer);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCustomer,
            'customer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCustomerToObjectStorageHoldingCustomer()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();
        $customerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($customer));
        $this->inject($this->subject, 'customer', $customerObjectStorageMock);

        $this->subject->addCustomer($customer);
    }

    /**
     * @test
     */
    public function removeCustomerFromObjectStorageHoldingCustomer()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();
        $customerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($customer));
        $this->inject($this->subject, 'customer', $customerObjectStorageMock);

        $this->subject->removeCustomer($customer);
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
