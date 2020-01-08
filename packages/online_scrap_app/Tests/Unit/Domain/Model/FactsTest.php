<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class FactsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Facts
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getInfoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInfo()
        );
    }

    /**
     * @test
     */
    public function setInfoForStringSetsInfo()
    {
        $this->subject->setInfo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'info',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRankReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRank()
        );
    }

    /**
     * @test
     */
    public function setRankForIntSetsRank()
    {
        $this->subject->setRank(12);

        self::assertAttributeEquals(
            12,
            'rank',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFactIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFactId()
        );
    }

    /**
     * @test
     */
    public function setFactIdForStringSetsFactId()
    {
        $this->subject->setFactId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'factId',
            $this->subject
        );
    }
}
