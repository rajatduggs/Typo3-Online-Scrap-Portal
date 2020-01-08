<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class ScrapCollectorControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\ScrapCollectorController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\ScrapCollectorController::class)
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
    public function listActionFetchesAllScrapCollectorsFromRepositoryAndAssignsThemToView()
    {

        $allScrapCollectors = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $scrapCollectorRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $scrapCollectorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allScrapCollectors));
        $this->inject($this->subject, 'scrapCollectorRepository', $scrapCollectorRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('scrapCollectors', $allScrapCollectors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenScrapCollectorToView()
    {
        $scrapCollector = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('scrapCollector', $scrapCollector);

        $this->subject->showAction($scrapCollector);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenScrapCollectorToScrapCollectorRepository()
    {
        $scrapCollector = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();

        $scrapCollectorRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $scrapCollectorRepository->expects(self::once())->method('add')->with($scrapCollector);
        $this->inject($this->subject, 'scrapCollectorRepository', $scrapCollectorRepository);

        $this->subject->createAction($scrapCollector);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenScrapCollectorToView()
    {
        $scrapCollector = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('scrapCollector', $scrapCollector);

        $this->subject->editAction($scrapCollector);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenScrapCollectorInScrapCollectorRepository()
    {
        $scrapCollector = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();

        $scrapCollectorRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $scrapCollectorRepository->expects(self::once())->method('update')->with($scrapCollector);
        $this->inject($this->subject, 'scrapCollectorRepository', $scrapCollectorRepository);

        $this->subject->updateAction($scrapCollector);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenScrapCollectorFromScrapCollectorRepository()
    {
        $scrapCollector = new \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector();

        $scrapCollectorRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $scrapCollectorRepository->expects(self::once())->method('remove')->with($scrapCollector);
        $this->inject($this->subject, 'scrapCollectorRepository', $scrapCollectorRepository);

        $this->subject->deleteAction($scrapCollector);
    }
}
