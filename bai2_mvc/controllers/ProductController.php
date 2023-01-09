<?php
require_once "models/Product.php";
function listProduct() {
    $products = getProduct();
    include_once "views/v_product.php";
//    var_dump($products);
//    die();
}

function addProduct() {
    return "Đây là chức năng thêm sản phẩm";
}

//tao 1 bang nhan vien gom id,tennv,luong
// thuc hien chuc nang hien thi danh sach ,them,xoa
//buoi sau cham lay lab
?>