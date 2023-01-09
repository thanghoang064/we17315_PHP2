<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        #dieu huong sang ProductController
        require_once 'controllers/ProductController.php';
        echo listProduct();
        break;
    case 'add-product':
        #dieu huong sang product controller
        require_once 'controllers/ProductController.php';
        echo addProduct();
        break;

}
?>