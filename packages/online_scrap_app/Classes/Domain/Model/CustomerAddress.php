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
 * CustomerAddress
 */
class CustomerAddress extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * customerId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $customerId = '';

    /**
     * phone
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $phone = '';

    /**
     * pincode
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $pincode = 0;

    /**
     * city
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $city = '';

    /**
     * address
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $address = '';

    /**
     * locality
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Locality
     */
    protected $locality = null;

    /**
     * Returns the customerId
     * 
     * @return string $customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets the customerId
     * 
     * @param string $customerId
     * @return void
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns the phone
     * 
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     * 
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the pincode
     * 
     * @return int $pincode
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * Sets the pincode
     * 
     * @param int $pincode
     * @return void
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    }

    /**
     * Returns the city
     * 
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     * 
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
}
