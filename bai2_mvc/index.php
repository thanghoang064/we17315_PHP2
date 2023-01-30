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
//Bài ASS 5 module quản lý
// sử dụng mô hình MVC có class (7 điểm)
// Giai đoạn 1 chấm 1 module quản lý
// có sử dụng kế thừa trong mô hình +1 điểm
?>