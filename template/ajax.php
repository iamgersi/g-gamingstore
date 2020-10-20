<?php
require ('../Database/Product.php');
require ('../Database/DBController.php');

$db = new DBController();
$product = new Product($db);


if (isset($_POST['itemid'])){
    $result = $product->getAllProducts($_POST['itemid']);
    echo json_encode($result);
}

