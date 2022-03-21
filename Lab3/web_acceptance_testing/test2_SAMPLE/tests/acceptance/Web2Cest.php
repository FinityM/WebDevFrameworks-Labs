<?php
use \Codeception\Util\HttpCode;

class Web2Cest
{
    public function web2_01_homePageHasWorkingLinkContact(AcceptanceTester $I)
    {
        $url = '/';
        $I->amOnPage($url);

        $I->seeLink('Contact Details');
        $I->click('Contact Details');

        $I->seeCurrentUrlEquals('/?action=contact');
    }

    public function web2_02_homePageHasWorkingLinkStudents(AcceptanceTester $I)
    {
        $url = '/';
        $I->amOnPage($url);

        $I->seeLink('List of Students');
        $I->click('List of Students');

        $I->seeCurrentUrlEquals('/?action=students');
    }

    public function web2_03_homePageHasWorkingLinkHome(AcceptanceTester $I)
    {
        $url = '/';
        $I->amOnPage($url);

        $I->seeLink('home');
        $I->click('home');

        $I->seeCurrentUrlEquals('/');
    }
}
