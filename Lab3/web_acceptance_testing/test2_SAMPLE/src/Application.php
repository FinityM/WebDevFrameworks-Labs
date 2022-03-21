<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action)
        {
            case 'contact':
                $this->contactPage();
                break;

            case 'students':
                $this->studentPage();
                break;

            default:
                $this->homePage();

        }
	}

    public function contactPage()
    {
        require_once __DIR__ . '/../templates/contact.php';
    }

    public function homePage()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    public function studentPage()
    {
        $repo = new StudentRepository();
        $students = $repo->findAll();

        require_once __DIR__ . '/../templates/studentList.php';
    }

}