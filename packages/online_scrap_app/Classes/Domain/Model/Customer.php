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
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * customerId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $customerId = '';

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * email
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * password
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $password = '';

    /**
     * loginType
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $loginType = '';

    /**
     * status
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $status = 0;

    /**
     * registrationKey
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $registrationKey = '';

    /**
     * customerAddress
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress>
     */
    protected $customerAddress = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->customerAddress = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the password
     * 
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the password
     * 
     * @param string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Returns the loginType
     * 
     * @return string $loginType
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Sets the loginType
     * 
     * @param string $loginType
     * @return void
     */
    public function setLoginType($loginType)
    {
        $this->loginType = $loginType;
    }

    /**
     * Returns the status
     * 
     * @return int $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param int $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the registrationKey
     * 
     * @return string $registrationKey
     */
    public function getRegistrationKey()
    {
        return $this->registrationKey;
    }

    /**
     * Sets the registrationKey
     * 
     * @param string $registrationKey
     * @return void
     */
    public function setRegistrationKey($registrationKey)
    {
        $this->registrationKey = $registrationKey;
    }

    /**
     * Adds a CustomerAddress
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddres
     * @return void
     */
    public function addCustomerAddres(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddres)
    {
        $this->customerAddress->attach($customerAddres);
    }

    /**
     * Removes a CustomerAddress
     * 
     * @param \RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddresToRemove The CustomerAddress to be removed
     * @return void
     */
    public function removeCustomerAddres(\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress $customerAddresToRemove)
    {
        $this->customerAddress->detach($customerAddresToRemove);
    }

    /**
     * Returns the customerAddress
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress> $customerAddress
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * Sets the customerAddress
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RajatDuggal\OnlineScrapApp\Domain\Model\CustomerAddress> $customerAddress
     * @return void
     */
    public function setCustomerAddress(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $customerAddress)
    {
        $this->customerAddress = $customerAddress;
    }
}
