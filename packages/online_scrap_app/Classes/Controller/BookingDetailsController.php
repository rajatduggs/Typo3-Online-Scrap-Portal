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
 * BookingDetailsController
 */
class BookingDetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookingDetailsRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository
     */
    protected $bookingDetailsRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository $bookingDetailsRepository
     */
    public function injectBookingDetailsRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository $bookingDetailsRepository)
    {
        $this->bookingDetailsRepository = $bookingDetailsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $bookingDetails = $this->bookingDetailsRepository->findAll();
        $this->view->assign('bookingDetails', $bookingDetails);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails)
    {
        $this->view->assign('bookingDetails', $bookingDetails);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $newBookingDetails
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $newBookingDetails)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingDetailsRepository->add($newBookingDetails);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails
     * @ignorevalidation $bookingDetails
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails)
    {
        $this->view->assign('bookingDetails', $bookingDetails);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingDetailsRepository->update($bookingDetails);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails $bookingDetails)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingDetailsRepository->remove($bookingDetails);
        $this->redirect('list');
    }
}
