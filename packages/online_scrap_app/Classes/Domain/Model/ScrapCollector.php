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
 * ScrapCollector
 */
class ScrapCollector extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * collectorId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $collectorId = '';

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * phoneNumber
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $phoneNumber = '';

    /**
     * emailId
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $emailId = '';

    /**
     * socialSecurityNumber
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $socialSecurityNumber = 0;

    /**
     * gender
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $gender = '';

    /**
     * birthDate
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $birthDate = null;

    /**
     * accountNumber
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $accountNumber = 0;

    /**
     * bankName
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bankName = '';

    /**
     * uniformSize
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $uniformSize = '';

    /**
     * cap
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $cap = '';

    /**
     * issueDate
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $issueDate = null;

    /**
     * idExpiry
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $idExpiry = null;

    /**
     * status
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $status = 0;

    /**
     * rating
     * 
     * @var int
     */
    protected $rating = 0;

    /**
     * locality
     * 
     * @var \RajatDuggal\OnlineScrapApp\Domain\Model\Locality
     */
    protected $locality = null;

    /**
     * Returns the collectorId
     * 
     * @return string $collectorId
     */
    public function getCollectorId()
    {
        return $this->collectorId;
    }

    /**
     * Sets the collectorId
     * 
     * @param string $collectorId
     * @return void
     */
    public function setCollectorId($collectorId)
    {
        $this->collectorId = $collectorId;
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
     * Returns the phoneNumber
     * 
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets the phoneNumber
     * 
     * @param string $phoneNumber
     * @return void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns the emailId
     * 
     * @return string $emailId
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Sets the emailId
     * 
     * @param string $emailId
     * @return void
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    }

    /**
     * Returns the socialSecurityNumber
     * 
     * @return int $socialSecurityNumber
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * Sets the socialSecurityNumber
     * 
     * @param int $socialSecurityNumber
     * @return void
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
    }

    /**
     * Returns the gender
     * 
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the gender
     * 
     * @param string $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Returns the birthDate
     * 
     * @return \DateTime $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets the birthDate
     * 
     * @param \DateTime $birthDate
     * @return void
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns the accountNumber
     * 
     * @return int $accountNumber
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets the accountNumber
     * 
     * @param int $accountNumber
     * @return void
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns the bankName
     * 
     * @return string $bankName
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets the bankName
     * 
     * @param string $bankName
     * @return void
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns the uniformSize
     * 
     * @return string $uniformSize
     */
    public function getUniformSize()
    {
        return $this->uniformSize;
    }

    /**
     * Sets the uniformSize
     * 
     * @param string $uniformSize
     * @return void
     */
    public function setUniformSize($uniformSize)
    {
        $this->uniformSize = $uniformSize;
    }

    /**
     * Returns the cap
     * 
     * @return string $cap
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Sets the cap
     * 
     * @param string $cap
     * @return void
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
    }

    /**
     * Returns the issueDate
     * 
     * @return \DateTime $issueDate
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets the issueDate
     * 
     * @param \DateTime $issueDate
     * @return void
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns the idExpiry
     * 
     * @return \DateTime $idExpiry
     */
    public function getIdExpiry()
    {
        return $this->idExpiry;
    }

    /**
     * Sets the idExpiry
     * 
     * @param \DateTime $idExpiry
     * @return void
     */
    public function setIdExpiry(\DateTime $idExpiry)
    {
        $this->idExpiry = $idExpiry;
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
     * Returns the rating
     * 
     * @return int $rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the rating
     * 
     * @param int $rating
     * @return void
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
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
