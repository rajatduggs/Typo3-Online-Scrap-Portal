<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class FactsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\FactsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\FactsController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllFactssFromRepositoryAndAssignsThemToView()
    {

        $allFactss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $factsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $factsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFactss));
        $this->inject($this->subject, 'factsRepository', $factsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('factss', $allFactss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFactsToView()
    {
        $facts = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('facts', $facts);

        $this->subject->showAction($facts);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFactsToFactsRepository()
    {
        $facts = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();

        $factsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $factsRepository->expects(self::once())->method('add')->with($facts);
        $this->inject($this->subject, 'factsRepository', $factsRepository);

        $this->subject->createAction($facts);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFactsToView()
    {
        $facts = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('facts', $facts);

        $this->subject->editAction($facts);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFactsInFactsRepository()
    {
        $facts = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();

        $factsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $factsRepository->expects(self::once())->method('update')->with($facts);
        $this->inject($this->subject, 'factsRepository', $factsRepository);

        $this->subject->updateAction($facts);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFactsFromFactsRepository()
    {
        $facts = new \RajatDuggal\OnlineScrapApp\Domain\Model\Facts();

        $factsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $factsRepository->expects(self::once())->method('remove')->with($facts);
        $this->inject($this->subject, 'factsRepository', $factsRepository);

        $this->subject->deleteAction($facts);
    }
}
