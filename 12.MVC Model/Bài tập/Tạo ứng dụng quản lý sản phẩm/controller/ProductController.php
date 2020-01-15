<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{
    public $ProductDB;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product", "root", "");
        $this->ProductDB = new ProductDB($connection->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $productName = $_POST['productName'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer = $_POST['producer'];
            $products = new Product($productName, $price, $description, $producer);
            $this->ProductDB->create($products);
            $message = 'Product created';
            header('Location: index.php');
        }
    }
    public function index()
    {
        $products = $this->ProductDB->getAll();
        include 'view/list.php';
        
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $products = $this->ProductDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->ProductDB->delete($id);
            header('Location: index.php');
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $products = new Product($_POST['productName'], $_POST['price'], $_POST['description'], $_POST['producer']);
            $this->ProductDB->update($id, $products);
            header('Location: index.php');
        }
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $productName = $_GET['productName'];
            $products = $this->ProductDB->get($productName);
            include 'view/search.php';
        } else {
            $id = $_POST['id'];
            $products = new Product($_POST['productName'], $_POST['price'], $_POST['description'], $_POST['producer']);
            $this->ProductDB->search($id, $products);
            header('Location: index.php');
        }
    }
}
