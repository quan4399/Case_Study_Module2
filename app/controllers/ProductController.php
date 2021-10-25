<?php

namespace app\Controllers;

use app\Models\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $productModel = new ProductModel();
        $this->productModel = $productModel;
    }

    public function index()
    {
        $products = $this->productModel->getAllProduct();
        include_once "views/product/list.php";
    }


    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include_once "views/product/add.php";
        } else {
            $array = [
                "productId" => $_POST["productId"],
                "productName" => $_POST["productName"],
                "productBrand" => $_POST["productBrand"],
                "productPrice" => $_POST["productPrice"],
                "productImage" => $_FILES["productImage"]['name'],
            ];
            $this->productModel->addProduct($array);
            /* Có thể viết :::: $this->index(); trở về trang index mà trang index là list bởi getall*/
            header("location: index.php ");
        }
    }

    public function deleteProductById()
    {
        include_once "views/product/delete.php";
        $id = $_GET['id'];//lay tren thanh URL
        $this->productModel->deleteProductById($id);
        header("location: index.php");//or $this->index()
    }

    public function showDetail()
    {
        $id = $_GET['id'];//lay tren thanh URL
        $product = $this->productModel->getDetailById($id);
        include_once "views/product/detail.php";
    }

    public function updateProduct()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getDetailById($id);
        include_once 'views/product/edit.php';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include_once 'views/product/edit.php';

            $product = [
                'productId' => $_POST['productId'],
                'productName' => $_POST['productName'],
                'productBrand' => $_POST['productBrand'],
                'productPrice' => $_POST['productPrice'],
                'productImage' => $_POST['productImage'],
            ];
            $this->productModel->updateProduct($id, $product);
//            header("location:index.php");
        }
    }
}