<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class BookingsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\BookingsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\BookingsController::class)
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
    public function listActionFetchesAllBookingssFromRepositoryAndAssignsThemToView()
    {

        $allBookingss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $bookingsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBookingss));
        $this->inject($this->subject, 'bookingsRepository', $bookingsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bookingss', $allBookingss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBookingsToView()
    {
        $bookings = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bookings', $bookings);

        $this->subject->showAction($bookings);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBookingsToBookingsRepository()
    {
        $bookings = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();

        $bookingsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsRepository->expects(self::once())->method('add')->with($bookings);
        $this->inject($this->subject, 'bookingsRepository', $bookingsRepository);

        $this->subject->createAction($bookings);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBookingsToView()
    {
        $bookings = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bookings', $bookings);

        $this->subject->editAction($bookings);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBookingsInBookingsRepository()
    {
        $bookings = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();

        $bookingsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsRepository->expects(self::once())->method('update')->with($bookings);
        $this->inject($this->subject, 'bookingsRepository', $bookingsRepository);

        $this->subject->updateAction($bookings);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBookingsFromBookingsRepository()
    {
        $bookings = new \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings();

        $bookingsRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingsRepository->expects(self::once())->method('remove')->with($bookings);
        $this->inject($this->subject, 'bookingsRepository', $bookingsRepository);

        $this->subject->deleteAction($bookings);
    }
}
