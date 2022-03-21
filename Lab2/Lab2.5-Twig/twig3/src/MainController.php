<?php
namespace Tudublin;

class MainController
{
    private $twig;

    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        $template = 'home.html.twig';
        $argsArray = [
            'pageTitle' => 'home'
        ];

        $html = $this->twig->render($template, $argsArray);

        print $html;

        /*$pageTitle = 'home';
        include __DIR__ . '/../templates/home.html.twig';*/
    }

    public function jokes()
    {
        $template = 'jokes.html.twig';
        $argsArray = [
            'pageTitle' => 'jokes'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;

        /*$pageTitle = 'jokes';
        include __DIR__ . '/../templates/jokes.html.twig';*/
    }

    public function about()
    {
        $pageTitle = 'about';
        include __DIR__ . '/../templates/about.html.twig';
    }

    public function products()
    {
        $p1 = new Product();
        $p1->setName('hammer');
        $p1->setPrice(9.99);

        $p2 = new Product();
        $p2->setName('short ladder');
        $p2->setPrice(19.99);

        $products = [
            $p1, $p2
        ];

        $pageTitle = 'products';
        include __DIR__ . '/../templates/products.html.twig';
    }


}