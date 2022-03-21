<?php

namespace Tudublin;

class ProductController
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function productForm()
    {
        require __DIR__ . '/../templates/product_form.php';
    }

    public function productEdit(int $id)
    {
        $product = $this->productRepository->find($id);
        require __DIR__ . '/../templates/product_edit.php';
    }

    public function listProducts()
    {
        // array 'movies' will be available for use by the PHP template (to loop through)
        $products = $this->productRepository->findAll();
        require __DIR__ . '/../templates/products_list.php';
    }

    public function productNew(string $title)
    {
        $p = new Product();
        $p->setTitle($title);

        $this->productRepository->insert($p);

        $this->listProducts();
    }

    public function productDelete(int $id)
    {
        $this->productRepository->delete($id);
        $this->listProducts();
    }

    public function processProductEdit(int $id, string $title)
    {
        $product = new Product();
        $product->setId($id);
        $product->setTitle($title);

        $this->productRepository->update($product);

        $this->listProducts();
    }
}