<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class ScrapCollectorTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCollectorIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCollectorId()
        );
    }

    /**
     * @test
     */
    public function setCollectorIdForStringSetsCollectorId()
    {
        $this->subject->setCollectorId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'collectorId',
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
    public function getPhoneNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhoneNumber()
        );
    }

    /**
     * @test
     */
    public function setPhoneNumberForStringSetsPhoneNumber()
    {
        $this->subject->setPhoneNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phoneNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmailId()
        );
    }

    /**
     * @test
     */
    public function setEmailIdForStringSetsEmailId()
    {
        $this->subject->setEmailId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'emailId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSocialSecurityNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSocialSecurityNumber()
        );
    }

    /**
     * @test
     */
    public function setSocialSecurityNumberForIntSetsSocialSecurityNumber()
    {
        $this->subject->setSocialSecurityNumber(12);

        self::assertAttributeEquals(
            12,
            'socialSecurityNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGender()
        );
    }

    /**
     * @test
     */
    public function setGenderForStringSetsGender()
    {
        $this->subject->setGender('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gender',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthDate()
        );
    }

    /**
     * @test
     */
    public function setBirthDateForDateTimeSetsBirthDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccountNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAccountNumber()
        );
    }

    /**
     * @test
     */
    public function setAccountNumberForIntSetsAccountNumber()
    {
        $this->subject->setAccountNumber(12);

        self::assertAttributeEquals(
            12,
            'accountNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBankNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBankName()
        );
    }

    /**
     * @test
     */
    public function setBankNameForStringSetsBankName()
    {
        $this->subject->setBankName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bankName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUniformSizeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUniformSize()
        );
    }

    /**
     * @test
     */
    public function setUniformSizeForStringSetsUniformSize()
    {
        $this->subject->setUniformSize('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'uniformSize',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCapReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCap()
        );
    }

    /**
     * @test
     */
    public function setCapForStringSetsCap()
    {
        $this->subject->setCap('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cap',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIssueDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getIssueDate()
        );
    }

    /**
     * @test
     */
    public function setIssueDateForDateTimeSetsIssueDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setIssueDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'issueDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdExpiryReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getIdExpiry()
        );
    }

    /**
     * @test
     */
    public function setIdExpiryForDateTimeSetsIdExpiry()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setIdExpiry($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'idExpiry',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForIntSetsStatus()
    {
        $this->subject->setStatus(12);

        self::assertAttributeEquals(
            12,
            'status',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForIntSetsRating()
    {
        $this->subject->setRating(12);

        self::assertAttributeEquals(
            12,
            'rating',
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
