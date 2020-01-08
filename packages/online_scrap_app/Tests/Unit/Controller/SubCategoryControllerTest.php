<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class SubCategoryControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\SubCategoryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\SubCategoryController::class)
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
    public function listActionFetchesAllSubCategoriesFromRepositoryAndAssignsThemToView()
    {

        $allSubCategories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $subCategoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSubCategories));
        $this->inject($this->subject, 'subCategoryRepository', $subCategoryRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('subCategories', $allSubCategories);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSubCategoryToView()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subCategory', $subCategory);

        $this->subject->showAction($subCategory);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSubCategoryToSubCategoryRepository()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();

        $subCategoryRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryRepository->expects(self::once())->method('add')->with($subCategory);
        $this->inject($this->subject, 'subCategoryRepository', $subCategoryRepository);

        $this->subject->createAction($subCategory);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSubCategoryToView()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subCategory', $subCategory);

        $this->subject->editAction($subCategory);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSubCategoryInSubCategoryRepository()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();

        $subCategoryRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryRepository->expects(self::once())->method('update')->with($subCategory);
        $this->inject($this->subject, 'subCategoryRepository', $subCategoryRepository);

        $this->subject->updateAction($subCategory);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSubCategoryFromSubCategoryRepository()
    {
        $subCategory = new \RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory();

        $subCategoryRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $subCategoryRepository->expects(self::once())->method('remove')->with($subCategory);
        $this->inject($this->subject, 'subCategoryRepository', $subCategoryRepository);

        $this->subject->deleteAction($subCategory);
    }
}
