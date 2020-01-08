<?php
namespace RajatDuggal\OnlineScrapApp\Controller;


/***
 *
 * This file is part of the "Online Scrap App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Rajat Duggal <rajat.duggal@hof-university.de>
 *
 ***/
/**
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * customerRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository
     */
    protected $customerRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository $customerRepository
     */
    public function injectCustomerRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $newCustomer
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $newCustomer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->add($newCustomer);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer
     * @ignorevalidation $customer
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->update($customer);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->remove($customer);
        $this->redirect('list');
    }
}
