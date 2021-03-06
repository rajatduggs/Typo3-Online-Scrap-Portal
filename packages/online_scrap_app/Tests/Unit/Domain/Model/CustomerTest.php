<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CustomerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();
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
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerAddressReturnsInitialValueForCustomerAddress()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCustomerAddress()
        );
    }

    /**
     * @test
     */
    public function setCustomerAddressForObjectStorageContainingCustomerAddressSetsCustomerAddress()
    {
        $customerAddres = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();
        $objectStorageHoldingExactlyOneCustomerAddress = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCustomerAddress->attach($customerAddres);
        $this->subject->setCustomerAddress($objectStorageHoldingExactlyOneCustomerAddress);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCustomerAddress,
            'customerAddress',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCustomerAddresToObjectStorageHoldingCustomerAddress()
    {
        $customerAddres = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();
        $customerAddressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($customerAddres));
        $this->inject($this->subject, 'customerAddress', $customerAddressObjectStorageMock);

        $this->subject->addCustomerAddres($customerAddres);
    }

    /**
     * @test
     */
    public function removeCustomerAddresFromObjectStorageHoldingCustomerAddress()
    {
        $customerAddres = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();
        $customerAddressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($customerAddres));
        $this->inject($this->subject, 'customerAddress', $customerAddressObjectStorageMock);

        $this->subject->removeCustomerAddres($customerAddres);
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForFrontendUser()
    {
    }

    /**
     * @test
     */
    public function setUserForFrontendUserSetsUser()
    {
    }
}
