<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CustomerAddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();
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
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPincodeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPincode()
        );
    }

    /**
     * @test
     */
    public function setPincodeForIntSetsPincode()
    {
        $this->subject->setPincode(12);

        self::assertAttributeEquals(
            12,
            'pincode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );
    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
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
