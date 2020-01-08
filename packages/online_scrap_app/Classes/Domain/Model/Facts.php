<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Model;


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
 * Facts
 */
class Facts extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * info
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $info = '';

    /**
     * rank
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $rank = 0;

    /**
     * factId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $factId = '';

    /**
     * Returns the info
     * 
     * @return string $info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets the info
     * 
     * @param string $info
     * @return void
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * Returns the rank
     * 
     * @return int $rank
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets the rank
     * 
     * @param int $rank
     * @return void
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * Returns the factId
     * 
     * @return string $factId
     */
    public function getFactId()
    {
        return $this->factId;
    }

    /**
     * Sets the factId
     * 
     * @param string $factId
     * @return void
     */
    public function setFactId($factId)
    {
        $this->factId = $factId;
    }
}
