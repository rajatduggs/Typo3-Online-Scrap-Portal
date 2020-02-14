<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;

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
 * The repository for Bookings
 */
class BookingsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /*
     * @param string $customerId
     * @return Bookings
     */
    /**
     * @param string $customerId
     */
    public function findAllByCustomerId(string $customerId)
    {
        $bookings=[];
        $query = $this->createQuery();
        try {
            $query->matching($query->equals('customerId', $customerId));
        } catch (InvalidQueryException $e) {
        }
        $bookings=$query->execute()->toArray();
        return $bookings;
    }
}
