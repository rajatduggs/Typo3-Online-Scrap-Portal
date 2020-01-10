<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class PricingTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RajatDuggal\OnlineScrapApp\Domain\Model\Pricing();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAmount()
        );
    }

    /**
     * @test
     */
    public function setAmountForIntSetsAmount()
    {
        $this->subject->setAmount(12);

        self::assertAttributeEquals(
            12,
            'amount',
            $this->subject
        );
    }
}
