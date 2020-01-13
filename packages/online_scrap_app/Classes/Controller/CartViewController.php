<?php
namespace RajatDuggal\OnlineScrapApp\Controller;

use RajatDuggal\OnlineScrapApp\Domain\Model\CartView;
use RajatDuggal\OnlineScrapApp\Domain\Model\Category;
use RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory;
use RajatDuggal\OnlineScrapApp\Domain\Repository\CartViewRepository;
use TYPO3\CMS\Extbase\Mvc\Exception\StopActionException;
use TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;

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
 * CartViewController
 */
class CartViewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * cartViewRepository
     * 
     * @var CartViewRepository
     */
    protected $cartViewRepository = null;


    /**
     * @param CartViewRepository $cartViewRepository
     */
    public function injectCartViewRepository(CartViewRepository $cartViewRepository)
    {
        $this->cartViewRepository = $cartViewRepository;
    }


    /**
     * action list
     * 
     * @param RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     * @return void
     */
    public function listAction()
    {
        $cartView = $this->cartViewRepository->findAll();
        $this->view->assign('cartview', $cartView);
    }

    /**
     * action show
     * 
     * @param RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CartView $cartView)
    {
        $this->view->assign('facts', $cartView);
    }

    /**
     * action new
     * 
     * @param RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     *
     * @param CartView $newCartView
     * @return void
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CartView $newCartView)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->cartViewRepository->add($newCartView);
        $this->redirect('list');
    }

    /**
     * action temp
     *
     * @param Category $category
     * @param SubCategory $subCategory
     * @param int $quantity
     * @return void
     * @throws IllegalObjectTypeException
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function tempAction(Category $category, SubCategory $subCategory = null, int $quantity = 1)
    {
        $newCartView = new CartView();
        $newCartView->setCategory($category);
        $newCartView->setSubCategory($subCategory);
        $newCartView->setQuantity($quantity);
       // $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->cartViewRepository->add($newCartView);
        $this->redirect('temp');
    }

    /**
     * action edit
     * 
     * @param RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     * @ignorevalidation $cartView
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CartView $cartView)
    {
        $this->view->assign('cartView', $cartView);
    }

    /**
     * action update
     *
     * @param CartView $cartView
     * @return void
     * @throws IllegalObjectTypeException
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CartView $cartView)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->cartViewRepository->update($cartView);
        $this->redirect('list');
    }
    /**
     * action delete
     * 
     * @param RajatDuggal\OnlineScrapApp\Domain\Model\CartView
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\CartView $cartView)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->cartViewRepository->remove($cartView);
        $this->redirect('list');
    }


}
