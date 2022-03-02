<?php

namespace Tudublin;

class MainController
{

    public function index()
    {
        require __DIR__ . '/../templates/homepage.php';
    }

    public function jokes()
    {
        require_once __DIR__ . '/../templates/jokes.php';
    }

    public function products()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->findAll();
    }

    public function listMovies()
    {
        $movieRepository = new MovieRepository();
        // array 'movies' will be available for use by the PHP template (to loop through)
        $movies = $movieRepository->findAll();

        require __DIR__ . '/../templates/movies_list.php';
    }

}