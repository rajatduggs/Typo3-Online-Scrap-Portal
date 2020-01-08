<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class LocalityControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\LocalityController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\LocalityController::class)
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
    public function listActionFetchesAllLocalitiesFromRepositoryAndAssignsThemToView()
    {

        $allLocalities = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $localityRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $localityRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLocalities));
        $this->inject($this->subject, 'localityRepository', $localityRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('localities', $allLocalities);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLocalityToView()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('locality', $locality);

        $this->subject->showAction($locality);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenLocalityToLocalityRepository()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();

        $localityRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $localityRepository->expects(self::once())->method('add')->with($locality);
        $this->inject($this->subject, 'localityRepository', $localityRepository);

        $this->subject->createAction($locality);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenLocalityToView()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('locality', $locality);

        $this->subject->editAction($locality);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenLocalityInLocalityRepository()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();

        $localityRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $localityRepository->expects(self::once())->method('update')->with($locality);
        $this->inject($this->subject, 'localityRepository', $localityRepository);

        $this->subject->updateAction($locality);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenLocalityFromLocalityRepository()
    {
        $locality = new \RajatDuggal\OnlineScrapApp\Domain\Model\Locality();

        $localityRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $localityRepository->expects(self::once())->method('remove')->with($locality);
        $this->inject($this->subject, 'localityRepository', $localityRepository);

        $this->subject->deleteAction($locality);
    }
}
