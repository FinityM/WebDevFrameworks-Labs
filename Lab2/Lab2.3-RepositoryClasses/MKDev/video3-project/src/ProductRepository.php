<?php

namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class ProductRepository extends DatabaseTableRepository
{
    private array $products;

    public function __construct()
    {
        $p1 = new Product();
        $p1->setId(1);
        $p1->setTitle('hammer');
        $p1->setPrice(9.99);

        $p2 = new Product();
        $p2->setId(2);
        $p2->setTitle('bucket');
        $p2->setPrice(2.99);

        $p3 = new Product();
        $p3->setId(3);
        $p3->setTitle('Bag of nails');
        $p3->setPrice(5.99);

        $this->products = [];
        $this->products[1] = $p1;
        $this->products[2] = $p2;
        $this->products[3] = $p3;

    }

    public function findAll()
    {
        return $this->products;
    }

    public function find(int $id){
        return $this->products[$id];
    }

}