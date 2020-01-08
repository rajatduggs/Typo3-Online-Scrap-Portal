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
 * FactsController
 */
class FactsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * factsRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository
     */
    protected $factsRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository $factsRepository
     */
    public function injectFactsRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\FactsRepository $factsRepository)
    {
        $this->factsRepository = $factsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $facts = $this->factsRepository->findAll();
        $this->view->assign('facts', $facts);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts)
    {
        $this->view->assign('facts', $facts);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Facts $newFacts
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Facts $newFacts)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->factsRepository->add($newFacts);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts
     * @ignorevalidation $facts
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts)
    {
        $this->view->assign('facts', $facts);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->factsRepository->update($facts);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Facts $facts)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->factsRepository->remove($facts);
        $this->redirect('list');
    }
}
