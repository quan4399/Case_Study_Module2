<?php

namespace app\Models;

use PDO;
use PDOException;

class ProductModel
{
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "");
        $this->pdo = $database->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public function getDetailById($id)
    {
        $sql = "SELECT * FROM products where productId= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function addProduct($array)
    {
        $sql = "INSERT INTO products(productId,productName,productBrand,productPrice,productImage)
                values (:productId,:productName,:productBrand,:productPrice,:productImage )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam("productId", $array["productId"]);
        $stmt->bindParam("productName", $array["productName"]);
        $stmt->bindParam("productBrand", $array["productBrand"]);
        $stmt->bindParam("productPrice", $array["productPrice"]);
        $stmt->bindParam("productImage", $array["productImage"]);
        $stmt->execute();
    }

    public function deleteProductById($id)
    {
        $sql = "DELETE FROM products where productId= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function updateProduct($id,$product)
    {
        $sql = "UPDATE products 
                SET  productName = :productName , productBrand = :productBrand,
                    productPrice = :productPrice, productImage = :productImage 
                where productId = :productId" ;
        $stmt= $this->pdo->prepare($sql);
        $stmt->bindParam("productName",$product['productName']);
        $stmt->bindParam("productBrand",$product['productBrand']);
        $stmt->bindParam("productPrice",$product['productPrice']);
        $stmt->bindParam("productImage",$product['productImage']);
        $stmt->bindParam("productId",$id);
        $stmt->execute();
    }

}