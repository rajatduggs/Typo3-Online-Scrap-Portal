<?php
namespace RajatDuggal\OnlineScrapApp\Controller;


use RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository;
use RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository;

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
 * BookingsController
 */
class BookingsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookingsRepository
     * 
     * @var BookingsRepository
     */
    protected $bookingsRepository = null;

    protected $scrapCollectorRepository=null;

    /**
     * @param ScrapCollectorRepository $scrapCollectorRepository
     */
    public function injectScrapCollectorRepository(ScrapCollectorRepository $scrapCollectorRepository)
    {
        $this->scrapCollectorRepository = $scrapCollectorRepository;
    }


    /**
     * @param BookingsRepository $bookingsRepository
     */
    public function injectBookingsRepository(BookingsRepository $bookingsRepository)
    {
        $this->bookingsRepository = $bookingsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $bookings = $this->bookingsRepository->findAll();
        $this->view->assign('bookings', $bookings);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings)
    {
        $this->view->assign('bookings', $bookings);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $newBookings
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $newBookings)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingsRepository->add($newBookings);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings
     * @ignorevalidation $bookings
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings)
    {
        $scrapCollectors = $this->scrapCollectorRepository->findAll();
        $this->view->assign('scrapCollectors', $scrapCollectors);
        $this->view->assign('bookings', $bookings);
    }

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function changeAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings, \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {

        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);

        $bookings->setScrapCollector($scrapCollector);
        $this->bookingsRepository->update($bookings);
        $this->redirect('list');
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingsRepository->update($bookings);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Bookings $bookings)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingsRepository->remove($bookings);
        $this->redirect('list');
    }
}
