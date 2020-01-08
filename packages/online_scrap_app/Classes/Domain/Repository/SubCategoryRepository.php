<?php
namespace RajatDuggal\OnlineScrapApp\Domain\Repository;

use RajatDuggal\OnlineScrapApp\Domain\Model\SubCategory;

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
 * The repository for SubCategories
 */
class SubCategoryRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param string $categoryId
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface| SubCategory[]
     */
    public function findBySearch(SubCategory $subcategory)
    {
        $query = $this->createQuery();
        $query->matching($query->like('subcategory', '%' . $subcategory . '%'));
        return $query->execute();
    }
}
