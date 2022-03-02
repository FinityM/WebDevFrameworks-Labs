<?php

class HomePageCest
{
    public function seeHelloTextInHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('hello');
    }

    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
