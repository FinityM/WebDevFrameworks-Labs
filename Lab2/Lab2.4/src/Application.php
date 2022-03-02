<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        // try to find action value from url-encoded variables ...
        $action = filter_input(INPUT_GET, 'action');

        $mainController = new MainController();
        $productController = new ProductController();

        // decide Response to create for user client ...
        switch ($action){

            case 'process_edit_product':
                $id = filter_input(INPUT_POST, 'id');
                $title = filter_input(INPUT_POST, 'title');
                $productController->processProductEdit($id, $title);
                break;

            case 'edit_product':
                $id = filter_input(INPUT_GET, 'id');
                $productController->productEdit($id);
                break;

            case 'delete_product':
                $id = filter_input(INPUT_GET, 'id');
                $productController->productDelete($id);
                break;

            case 'create_product':
                $title = filter_input(INPUT_POST, 'title');
                $productController->productNew($title);
                break;

            case 'product_form':
                $productController->productForm();
                break;

            case 'movies':
                $mainController->listMovies();
                break;

            case 'products':
                $productController->listProducts();
                break;

            case 'home':
            default:
                $mainController->index();
        }

    }


}