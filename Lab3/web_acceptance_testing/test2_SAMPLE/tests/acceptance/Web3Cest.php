<?php
use \Codeception\Util\HttpCode;

class Web3Cest
{
    public function web3_01_seeCorrectNumberOfStudents(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $I->seeNumberOfElements('main ul li', 4);
    }

    public function web3_02_seeStudent1(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'matt murphy';
        $I->see($name, ['css' => 'body main']);
    }

    public function web3_03_seeStudent2(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'Joan Jones';
        $I->see($name, ['css' => 'body main']);
    }

    public function web3_04_seeStudent3(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'another student';
        $I->see($name, ['css' => 'body main']);
    }

    public function web3_05_seeStudent4(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'student99';
        $I->see($name, ['css' => 'body main']);
    }


    public function web3_06_seeStudent1ToString(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'STUDENT: id = 1, name = matt murphy, gpa = 3.5';
        $I->see($name, ['css' => 'body main']);
    }


    public function web3_07_seeStudent2ToString(AcceptanceTester $I)
    {
        $url = '/?action=students';
        $I->amOnPage($url);
        $I->validateMarkup(['ignoreWarnings' => false]);

        $name = 'STUDENT: id = 2, name = Joan Jones, gpa = 3.75';
        $I->see($name, ['css' => 'body main']);
    }






}
