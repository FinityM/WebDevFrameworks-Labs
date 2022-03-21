<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;

use Tudublin\Product;
use Tudublin\ProductRepository;

$movieRepository = new MovieRepository();
$productRepository = new ProductRepository();

// (1) drop then create table
$movieRepository->dropTable();
$movieRepository->createTable();

$productRepository->dropTable();
$productRepository->createTable();


// (2) delete any existing objects
$movieRepository->deleteAll();

$productRepository->deleteAll();


// (3) create & insert objects
$movieRepository->createAndInsert('Jaws', 9.99, 'horror');
$movieRepository->createAndInsert('Jumanji', 7, 'entertainment');

// (3) create objects
$p1 = new Product();
$p1->setTitle('hammer');

$p2 = new Product();
$p2->setTitle('ladder');

// (3) insert objects into DB
$productRepository->insert($p1);
$productRepository->insert($p2);

// (4) test objects are there
$movies = $movieRepository->findAll();
print '<pre>';
var_dump($movies);

$products = $productRepository->findAll();
print '<pre>';
var_dump($products);

