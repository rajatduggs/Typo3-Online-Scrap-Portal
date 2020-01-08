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
 * LocalityController
 */
class LocalityController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * localityRepository
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository
     */
    protected $localityRepository = null;

    /**
     * @param \RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository $localityRepository
     */
    public function injectLocalityRepository(\RajatDuggal\OnlineScrapApp\Domain\Repository\LocalityRepository $localityRepository)
    {
        $this->localityRepository = $localityRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $localities = $this->localityRepository->findAll();
        $this->view->assign('localities', $localities);
    }

    /**
     * action show
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function showAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->view->assign('locality', $locality);
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
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $newLocality
     * @return void
     */
    public function createAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $newLocality)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->localityRepository->add($newLocality);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @ignorevalidation $locality
     * @return void
     */
    public function editAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->view->assign('locality', $locality);
    }

    /**
     * action update
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function updateAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->localityRepository->update($locality);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function deleteAction(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->localityRepository->remove($locality);
        $this->redirect('list');
    }
}
