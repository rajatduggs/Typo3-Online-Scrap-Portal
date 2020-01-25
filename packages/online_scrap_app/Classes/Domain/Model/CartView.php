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
class CartView extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * category
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $category = '';

    /**
     * subCategory
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $subCategory = 0;

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = '';

    /**
     * locality
     * 
     * @var string
     */
    protected $locality = null;

    /**
     * Returns the category
     * 
     * @return string category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Returns the subCategory
     * 
     * @return string subCategory
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * Sets the subCategory
     * 
     * @param int $subCategory
     * @return void
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
    }

    /**
     * Returns the locality
     * 
     * @return \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Sets the locality
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality
     * @return void
     */
    public function setLocality(\RajatDuggal\OnlineScrapApp\Domain\Model\Locality $locality)
    {
        $this->locality = $locality;
    }

    /**
     * Returns the quantity
     * 
     * @return int quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param string $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
