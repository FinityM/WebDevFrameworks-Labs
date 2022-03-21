<?php
use \Codeception\Util\HttpCode;

class Web1Cest
{

    public function web1_02_pageValidHtmlNoErrors_Contact(AcceptanceTester $I)
    {
        $url = '/?action=contact';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);
    }

    public function web1_02_pageValidHtmlNoErrorsStudentList(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);
    }


    public function web1_03_seeContactUsPageTextSomewhere(AcceptanceTester $I)
    {
        $url = '/?action=contact';
        $I->amOnPage($url);
        $I->see('Contact Us Page');
    }

    public function web1_04_seeContactUsPageTextHeadingOne(AcceptanceTester $I)
    {
        $url = '/?action=contact';
        $I->amOnPage($url);
        $I->see('Contact Us', ['css' => 'body h1']);
    }

    public function web1_05_seeContactUsPageTextInTitle(AcceptanceTester $I)
    {
        $url = '/?action=contact';
        $I->amOnPage($url);
        $I->see('Contact Us Page', ['css' => 'title']);
    }

    public function web1_06_seeAddressTextInBodyParagraph(AcceptanceTester $I)
    {
        $url = '/?action=contact';
        $I->amOnPage($url);
        $I->see('10 Main Street', ['css' => 'body p']);
    }

}
