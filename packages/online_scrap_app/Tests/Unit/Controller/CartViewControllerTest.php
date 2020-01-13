<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CartViewControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\CartViewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\CartViewController::class)
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
    public function listActionFetchesAllCartViewsFromRepositoryAndAssignsThemToView()
    {

        $allCartViews = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cartViewRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cartViewRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCartViews));
        $this->inject($this->subject, 'cartViewRepository', $cartViewRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cartViews', $allCartViews);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCartViewToView()
    {
        $cartView = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cartView', $cartView);

        $this->subject->showAction($cartView);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCartViewToCartViewRepository()
    {
        $cartView = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();

        $cartViewRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $cartViewRepository->expects(self::once())->method('add')->with($cartView);
        $this->inject($this->subject, 'cartViewRepository', $cartViewRepository);

        $this->subject->createAction($cartView);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCartViewToView()
    {
        $cartView = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cartView', $cartView);

        $this->subject->editAction($cartView);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCartViewInCartViewRepository()
    {
        $cartView = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();

        $cartViewRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $cartViewRepository->expects(self::once())->method('update')->with($cartView);
        $this->inject($this->subject, 'cartViewRepository', $cartViewRepository);

        $this->subject->updateAction($cartView);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCartViewFromCartViewRepository()
    {
        $cartView = new \RajatDuggal\OnlineScrapApp\Domain\Model\CartView();

        $cartViewRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $cartViewRepository->expects(self::once())->method('remove')->with($cartView);
        $this->inject($this->subject, 'cartViewRepository', $cartViewRepository);

        $this->subject->deleteAction($cartView);
    }
}
