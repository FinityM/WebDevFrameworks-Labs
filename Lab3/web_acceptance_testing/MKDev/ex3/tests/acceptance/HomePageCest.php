<?php

class HomePageCest
{
    public function seeHelloTextInHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('hello');
    }

    public function linkToHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/home.php');
        $I->seeLink('home');
    }

    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
