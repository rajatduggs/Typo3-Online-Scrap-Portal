<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CartViewTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();
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

    /**
     * @test
     */
    public function getLocalityReturnsInitialValueForLocality()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLocality()
        );
    }

    /**
     * @test
     */
    public function setLocalityForObjectStorageContainingLocalitySetsLocality()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();
        $objectStorageHoldingExactlyOneLocality = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLocality->attach($locality);
        $this->subject->setLocality($objectStorageHoldingExactlyOneLocality);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLocality,
            'locality',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addLocalityToObjectStorageHoldingLocality()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();
        $localityObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $localityObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($locality));
        $this->inject($this->subject, 'locality', $localityObjectStorageMock);

        $this->subject->addLocality($locality);
    }

    /**
     * @test
     */
    public function removeLocalityFromObjectStorageHoldingLocality()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();
        $localityObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $localityObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($locality));
        $this->inject($this->subject, 'locality', $localityObjectStorageMock);

        $this->subject->removeLocality($locality);
    }
}
