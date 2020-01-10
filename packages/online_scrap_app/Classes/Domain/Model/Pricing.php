<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Model;


/***
 *
 * This file is part of the "Online Scrap App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Rajat Duggal <rajat.duggal@hof-university.de>
 *
 ***/
/**
 * Pricing
 */
class Pricing extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * price
     * 
     * @var int
     */
    protected $price = 0;

    /**
     * amount
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $amount = 0;

    /**
     * category
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Category
     */
    protected $category = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the price
     * 
     * @return int $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param int $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the amount
     * 
     * @return int $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the amount
     * 
     * @param int $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns the category
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\RajatDuggal\OnlineScrapApp\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
}
