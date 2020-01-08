<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class BookingDetailsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\BookingDetailsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\BookingDetailsController::class)
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
    public function listActionFetchesAllBookingDetailssFromRepositoryAndAssignsThemToView()
    {

        $allBookingDetailss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $bookingDetailsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBookingDetailss));
        $this->inject($this->subject, 'bookingDetailsRepository', $bookingDetailsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bookingDetailss', $allBookingDetailss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBookingDetailsToView()
    {
        $bookingDetails = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bookingDetails', $bookingDetails);

        $this->subject->showAction($bookingDetails);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBookingDetailsToBookingDetailsRepository()
    {
        $bookingDetails = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();

        $bookingDetailsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsRepository->expects(self::once())->method('add')->with($bookingDetails);
        $this->inject($this->subject, 'bookingDetailsRepository', $bookingDetailsRepository);

        $this->subject->createAction($bookingDetails);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBookingDetailsToView()
    {
        $bookingDetails = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bookingDetails', $bookingDetails);

        $this->subject->editAction($bookingDetails);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBookingDetailsInBookingDetailsRepository()
    {
        $bookingDetails = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();

        $bookingDetailsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsRepository->expects(self::once())->method('update')->with($bookingDetails);
        $this->inject($this->subject, 'bookingDetailsRepository', $bookingDetailsRepository);

        $this->subject->updateAction($bookingDetails);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBookingDetailsFromBookingDetailsRepository()
    {
        $bookingDetails = new \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails();

        $bookingDetailsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingDetailsRepository->expects(self::once())->method('remove')->with($bookingDetails);
        $this->inject($this->subject, 'bookingDetailsRepository', $bookingDetailsRepository);

        $this->subject->deleteAction($bookingDetails);
    }
}
