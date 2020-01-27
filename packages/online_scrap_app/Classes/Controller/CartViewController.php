<?php
namespace RajatDuggal\OnlineScrapApp\Controller;

use RajatDuggal\OnlineScrapApp\Domain\Model\CartView;
use RajatDuggal\OnlineScrapApp\Domain\Model\Category;
use RajatDuggal\OnlineScrapApp\Domain\Model\Locality;
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CartView $newCartView
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @return void
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
     * @param Locality $locality
     * @throws IllegalObjectTypeException
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @return void
     */
    public function tempAction(Category $category = null, SubCategory $subCategory = null, int $quantity = 1, Locality $locality = null)
    {

        // having type hints to models, like Category or SubCategory will
        // trigger automatically resolving for submitted `uid` (integer) values
        // @see https://docs.typo3.org/m/typo3/book-extbasefluid/master/en-us/7-Controllers/1-Creating-Controllers-and-Actions.html#flow-pattern-display-a-single-domain-object
        $cartView = $this->cartViewRepository->findAll();
        $this->view->assign('locality', $locality);
        if (null != $category && null != $subCategory && $quantity != null) {
            $newCartView = new CartView();
            $newCartView->setCategory($category->getName());
            $newCartView->setSubCategory($subCategory->getName());
            $newCartView->setQuantity($quantity);
            $newCartView->setLocality($locality);

            // $container = new CartContainer();
            // $container->addCartView($newCartView);
            $this->cartViewRepository->add($newCartView);
            $testName = $subCategory->getName();
            $this->view->assign('testName', $testName);
            $this->view->assign('category', $category);
            $this->view->assign('subcategory', $subCategory);
            $this->view->assign('quantity', $quantity);
            $this->view->assign('cartView', $cartView);
            $this->redirect('temp', null, null, ['locality' => $locality]);

            //$this->redirect('selectCategory', 'Category', 'AddToCart', ['locality' => $newCartView->getLocality()],'22');
        } elseif ($cartView != null) {
            $cartView = $this->cartViewRepository->findAll();
            $this->view->assign('cartView', $cartView);
            $this->view->assign('locality', $locality);
        }

        // $this->redirect('temp');
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CartView $cartView
     * @throws IllegalObjectTypeException
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     * @return void
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

        //$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->cartViewRepository->remove($cartView);

        //$this->redirect('temp');
        $this->redirect('temp', null, null, ['locality' => $cartView->getLocality()]);
    }
}