<?php
namespace RajatDuggal\OnlineScrapApp\Controller;

use OliverHader\SessionService\SubjectResolver;
use RajatDuggal\OnlineScrapApp\Domain\Model\BookingDetails;
use RajatDuggal\OnlineScrapApp\Domain\Model\Bookings;
use RajatDuggal\OnlineScrapApp\Domain\Model\CartView;
use RajatDuggal\OnlineScrapApp\Domain\Model\Customer;
use RajatDuggal\OnlineScrapApp\Domain\Repository\BookingsRepository;
use RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository;
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
     * cartViewRepository
     *
     * @var CartViewRepository
     */
    protected $cartViewRepository = null;

    /**
     * bookingsRepository
     *
     * @var BookingsRepository
     */
    protected $bookingsRepository = null;

    /**
     * bookingDetailsRepository
     *
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository
     */
    protected $bookingDetailsRepository = null;
    protected $scrapCollectorRepository = null;

    /**
     * @param CartViewRepository $cartViewRepository
     */
    public function injectCartViewRepository(CartViewRepository $cartViewRepository)
    {
        $this->cartViewRepository = $cartViewRepository;
    }

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository $bookingDetailsRepository
     */
    public function injectBookingDetailsRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\BookingDetailsRepository $bookingDetailsRepository)
    {
        $this->bookingDetailsRepository = $bookingDetailsRepository;
    }

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
     * action list
     *
     * @return void
     */
    public function customerBookingListAction()
    {
        $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('user')->resolve();
        $this->view->assign('customer', $customer);
        $bookings = $this->bookingsRepository->findAllByCustomerId($customer->getCustomerId());
        $this->view->assign('bookings', $bookings);
    }

    /**
     * action show
     *
     * @param Bookings $bookings
     * @return void
     */
    public function showAction(Bookings $bookings)
    {
        $this->view->assign('bookings', $bookings);
    }

    /**
     * action newBooking
     *
     * @return void
     */
    public function newbookingAction()
    {

        /* initializeAction();
           $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('user')->resolve();
           $this->view->assign('customer', $customer);*/
        //$this->redirect('newbooking');
    }

    /**
     * action createBooking
     *
     * @param Bookings $newBookings
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @return void
     */
    public function createBookingAction(Bookings $newBookings)
    {
        $locality =null;
        $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('user')->resolve();

        $cartView = $this->cartViewRepository->findAll();

        //changing to date format from dd/mm/yyyy format to y-m-d
        $time = strtotime($newBookings->getBookingTime());
        $newFormat = date('Y-m-d', $time);
        $newBookings->setBookingTime($newFormat);

        // random booking id generation
        $random=$this->genRandomString();
        $customerId=$customer->getCustomerId();
        $bookingId = $customerId . $random ;
        $bookingId=trim($bookingId);

        /** @var CartView $cart */
        foreach ($cartView as $cart) {
            // filling booking details with view cart parameter
            $newbookingDetails = new BookingDetails();
            $newbookingDetails->setCategory($cart->getCategory());
            $newbookingDetails->setQuantity($cart->getQuantity());
            $newbookingDetails->setBookingId($bookingId);
            $locality = $cart->getLocality()->current();
            $this->bookingDetailsRepository->add($newbookingDetails);
            // get current (only one) Locality from Cart

        }

        //adding missing parameters in newBooking object
        $newBookings->setStatus("NEW");
        $newBookings->setCustomerId($customerId);
        $newBookings->setBookingId($bookingId);
        $this->bookingsRepository->add($newBookings);
        $this->view->assign('customer', $customer);

        $this->cartViewRepository->removeAll();
        $this->redirect('customBookingList', 'Bookings', 'CustomerBookingList',[],'17');
    }

    /**
     * action create
     *
     * @param Bookings $newBookings
     * @return void
     */
    public function createAction(Bookings $newBookings)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingsRepository->add($newBookings);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param Bookings $bookings
     * @ignorevalidation $bookings
     * @return void
     */
    public function editAction(Bookings $bookings)
    {
        $scrapCollectors = $this->scrapCollectorRepository->findAll();
        $this->view->assign('scrapCollectors', $scrapCollectors);
        $this->view->assign('bookings', $bookings);
    }

    /**
     * @param Bookings $bookings
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function changeAction(Bookings $bookings, \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {

        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $bookings->setScrapCollector($scrapCollector);
        $this->bookingsRepository->update($bookings);
        $this->redirect('list');
    }

    /**
     * action update
     *
     * @param Bookings $bookings
     * @return void
     */
    public function updateAction(Bookings $bookings)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingsRepository->update($bookings);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param Bookings $bookings
     * @return void
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function deleteAction(Bookings $bookings)
    {
        $this->bookingsRepository->remove($bookings);


            $this->redirect('customBookingList', 'Bookings', 'CustomerBookingList', [], '17');

    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
    }

    public function genRandomString($length = 10)
    {
        if($length < 1)
            $length = 1;
        return substr(preg_replace("/[^A-Za-z0-9]/", '', base64_encode(openssl_random_pseudo_bytes($length * 2))), 0, $length);
    }
}