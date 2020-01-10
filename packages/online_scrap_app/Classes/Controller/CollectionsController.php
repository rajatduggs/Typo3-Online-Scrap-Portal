<?php
namespace RajatDuggal\OnlineScrapApp\Controller;


use RajatDuggal\OnlineScrapApp\Domain\Model\Category;
use RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory;

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
 * CollectionsController
 */
class CollectionsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * collectionsRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository
     */
    protected $collectionsRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository $collectionsRepository
     */
    public function injectCollectionsRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\CollectionsRepository $collectionsRepository)
    {
        $this->collectionsRepository = $collectionsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $collections = $this->collectionsRepository->findAll();
        $this->view->assign('collections', $collections);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections)
    {
        $this->view->assign('collections', $collections);
    }

    /**
     * action new
     *
     * @param Category $category
     * @param SubCategory $subCategory
     * @param int $quantity
     * @return void
     */
    public function testAction(Category $category,SubCategory $subcat,int $quantity)
    {
        $this->view->assign('category',$category);
        $this->view->assign('subcategory',$subcat);
        $this->view->assign('quantity',$quantity);

    }

    /**
     * action create
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Collections $newCollections
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Collections $newCollections)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->collectionsRepository->add($newCollections);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections
     * @ignorevalidation $collections
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections)
    {
        $this->view->assign('collections', $collections);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->collectionsRepository->update($collections);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Collections $collections)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->collectionsRepository->remove($collections);
        $this->redirect('list');
    }
}
