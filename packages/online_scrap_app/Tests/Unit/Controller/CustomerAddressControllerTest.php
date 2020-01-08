<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CustomerAddressControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\CustomerAddressController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\CustomerAddressController::class)
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
    public function listActionFetchesAllCustomerAddressesFromRepositoryAndAssignsThemToView()
    {

        $allCustomerAddresses = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $customerAddressRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCustomerAddresses));
        $this->inject($this->subject, 'customerAddressRepository', $customerAddressRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('customerAddresses', $allCustomerAddresses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCustomerAddressToView()
    {
        $customerAddress = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customerAddress', $customerAddress);

        $this->subject->showAction($customerAddress);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCustomerAddressToCustomerAddressRepository()
    {
        $customerAddress = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();

        $customerAddressRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressRepository->expects(self::once())->method('add')->with($customerAddress);
        $this->inject($this->subject, 'customerAddressRepository', $customerAddressRepository);

        $this->subject->createAction($customerAddress);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCustomerAddressToView()
    {
        $customerAddress = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customerAddress', $customerAddress);

        $this->subject->editAction($customerAddress);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCustomerAddressInCustomerAddressRepository()
    {
        $customerAddress = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();

        $customerAddressRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressRepository->expects(self::once())->method('update')->with($customerAddress);
        $this->inject($this->subject, 'customerAddressRepository', $customerAddressRepository);

        $this->subject->updateAction($customerAddress);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCustomerAddressFromCustomerAddressRepository()
    {
        $customerAddress = new \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress();

        $customerAddressRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerAddressRepository->expects(self::once())->method('remove')->with($customerAddress);
        $this->inject($this->subject, 'customerAddressRepository', $customerAddressRepository);

        $this->subject->deleteAction($customerAddress);
    }
}
