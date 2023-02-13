<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController extends BaseController {
    public $product;
    public function __construct() {
        //khởi tạo model product
      $this->product = new Product();
    }
    public function index() {
//        echo "Đây là route test";
        //gọi phương getproduct trong này
       $products =  $this->product->getProduct();
       //gọi view index vào đây và bắn dữ liệu products sang
       $this->render('product.index',compact('products'));

    }
    public function add() {
        $product = new Product();
    }
}