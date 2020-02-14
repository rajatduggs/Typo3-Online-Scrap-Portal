<?php namespace OliverHader\BookStoreProject\Tests\Acceptance\Support;
use OliverHader\BookStoreProject\Tests\Acceptance\Support\AcceptanceTester;

class FrontendPagesCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantToTest("Main Navigation Page");
        $I->amOnPage('/');
        $I->canSee("Home",'nav#mainnavigation');
        $I->canSee("ViewCart",'nav#mainnavigation');


    }
}
