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
 * CustomerAddressController
 */
class CustomerAddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * customerAddressRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository
     */
    protected $customerAddressRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository $customerAddressRepository
     */
    public function injectCustomerAddressRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\CustomerAddressRepository $customerAddressRepository)
    {
        $this->customerAddressRepository = $customerAddressRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $customerAddresses = $this->customerAddressRepository->findAll();
        $this->view->assign('customerAddresses', $customerAddresses);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress)
    {
        $this->view->assign('customerAddress', $customerAddress);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $newCustomerAddress
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $newCustomerAddress)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerAddressRepository->add($newCustomerAddress);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress
     * @ignorevalidation $customerAddress
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress)
    {
        $this->view->assign('customerAddress', $customerAddress);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerAddressRepository->update($customerAddress);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddress)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerAddressRepository->remove($customerAddress);
        $this->redirect('list');
    }
}
