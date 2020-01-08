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
 * ScrapCollectorController
 */
class ScrapCollectorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * scrapCollectorRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository
     */
    protected $scrapCollectorRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository $scrapCollectorRepository
     */
    public function injectScrapCollectorRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\ScrapCollectorRepository $scrapCollectorRepository)
    {
        $this->scrapCollectorRepository = $scrapCollectorRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $scrapCollectors = $this->scrapCollectorRepository->findAll();
        $this->view->assign('scrapCollectors', $scrapCollectors);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {
        $this->view->assign('scrapCollector', $scrapCollector);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $newScrapCollector
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $newScrapCollector)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->scrapCollectorRepository->add($newScrapCollector);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @ignorevalidation $scrapCollector
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {
        $this->view->assign('scrapCollector', $scrapCollector);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->scrapCollectorRepository->update($scrapCollector);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\ScrapCollector $scrapCollector)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->scrapCollectorRepository->remove($scrapCollector);
        $this->redirect('list');
    }
}
