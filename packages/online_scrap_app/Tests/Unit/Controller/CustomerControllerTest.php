<?php
namespace RajatDuggal\OnlineScrapApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Rajat Duggal <rajat.duggal@hof-university.de>
 */
class CustomerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RajatDuggal\OnlineScrapApp\Controller\CustomerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Controller\CustomerController::class)
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
    public function listActionFetchesAllCustomersFromRepositoryAndAssignsThemToView()
    {

        $allCustomers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $customerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCustomers));
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('customers', $allCustomers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCustomerToView()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customer', $customer);

        $this->subject->showAction($customer);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCustomerToCustomerRepository()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('add')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->createAction($customer);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCustomerToView()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customer', $customer);

        $this->subject->editAction($customer);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCustomerInCustomerRepository()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('update')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->updateAction($customer);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCustomerFromCustomerRepository()
    {
        $customer = new \RajatDuggal\OnlineScrapApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('remove')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->deleteAction($customer);
    }
}
