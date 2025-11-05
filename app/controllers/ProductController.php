<?php
require_once(__DIR__."/../models/ProductModel.php");


class ProductController{

    public function view(string $method,array $params = []){
        try{
            call_user_func([$this,$method],$params);
        } catch (Error $e) {
        }
    }
    public function show(array $params = []){
        // Préparation de la variable $id à afficher dans la vue
        $id = $params[0];

        // Récupération d'un produit
        $productModel = new ProductModel();
        $product = $productModel->get($id);

        require_once(__DIR__."/../views/single-product.php");

       
    }
}