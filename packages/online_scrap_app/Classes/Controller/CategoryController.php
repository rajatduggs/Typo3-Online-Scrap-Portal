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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     */
    public function selectCategoryAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('locality', $locality);
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $newCategory
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $newCategory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->add($newCategory);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @ignorevalidation $category
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->update($category);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->remove($category);
        $this->redirect('list');
    }
}
