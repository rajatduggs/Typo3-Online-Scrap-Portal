<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CollectionsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\CollectionsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\CollectionsController::class)
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
    public function listActionFetchesAllCollectionssFromRepositoryAndAssignsThemToView()
    {

        $allCollectionss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $collectionsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCollectionss));
        $this->inject($this->subject, 'collectionsRepository', $collectionsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('collectionss', $allCollectionss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCollectionsToView()
    {
        $collections = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('collections', $collections);

        $this->subject->showAction($collections);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCollectionsToCollectionsRepository()
    {
        $collections = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();

        $collectionsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsRepository->expects(self::once())->method('add')->with($collections);
        $this->inject($this->subject, 'collectionsRepository', $collectionsRepository);

        $this->subject->createAction($collections);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCollectionsToView()
    {
        $collections = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('collections', $collections);

        $this->subject->editAction($collections);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCollectionsInCollectionsRepository()
    {
        $collections = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();

        $collectionsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsRepository->expects(self::once())->method('update')->with($collections);
        $this->inject($this->subject, 'collectionsRepository', $collectionsRepository);

        $this->subject->updateAction($collections);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCollectionsFromCollectionsRepository()
    {
        $collections = new \RajatDuggal\OnlineScrapApp\Domain\Model\Collections();

        $collectionsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsRepository->expects(self::once())->method('remove')->with($collections);
        $this->inject($this->subject, 'collectionsRepository', $collectionsRepository);

        $this->subject->deleteAction($collections);
    }
}
