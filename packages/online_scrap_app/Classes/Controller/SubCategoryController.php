<?php
namespace RajatDuggal\OnlineScrapApp\Controller;

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
 * SubCategoryController
 */
class SubCategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * subCategoryRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository
     */
    protected $subCategoryRepository = null;
    protected $categoryRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository $subCategoryRepository
     */
    public function injectSubCategoryRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository $subCategoryRepository)
    {
        $this->subCategoryRepository = $subCategoryRepository;
    }

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\SubCategoryRepository $subCategoryRepository
     */
    public function injectCategoryRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->subCategoryRepository = $categoryRepository;
    }

    /**
     * action list
     * 
     * @param SubCategory $subCategory
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\NoSuchArgumentException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function listAction(SubCategory $subcategory)
    {

        //$categoryOne = $this->request->getArgument('category');
        if ($subcategory != null) {
            $subCategories = $this->subCategoryRepository->findAll();
        } else {
            $subCategories = $this->subCategoryRepository->findBySearch($subcategory);
        }
        $this->view->assign('subcategory', $subcategory);

        //  $this->view->assign('categoryId', $categoryId);
        $this->view->assign('subCategories', $subCategories);
    }

    /**
     * action show
     * 
     * @param SubCategory $subCategory
     * @return void
     */
    public function showAction(SubCategory $subCategory)
    {
        $this->view->assign('subCategory', $subCategory);
    }

    /**
     * action new
     * 
     * @param string $category
     * @return void
     */
    public function newAction(string $category)
    {
    }

    /**
     * action create
     * 
     * @param SubCategory $newSubCategory
     * @return void
     */
    public function createAction(SubCategory $newSubCategory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subCategoryRepository->add($newSubCategory);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param SubCategory $subCategory
     * @ignorevalidation $subCategory
     * @return void
     */
    public function editAction(SubCategory $subCategory)
    {
        $this->view->assign('subCategory', $subCategory);
    }

    /**
     * action update
     * 
     * @param SubCategory $subCategory
     * @return void
     */
    public function updateAction(SubCategory $subCategory)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subCategoryRepository->update($subCategory);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param SubCategory $subCategory
     * @return void
     */
    public function deleteAction(SubCategory $subCategory)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subCategoryRepository->remove($subCategory);
        $this->redirect('list');
    }
}
