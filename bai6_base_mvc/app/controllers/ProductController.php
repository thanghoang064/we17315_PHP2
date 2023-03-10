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
        $this->render('product.add');
    }
    public function postProduct() {
       if (isset($_POST['them'])) {
           //khởi tạo 1 mảng error bằng rỗng

           $errors = [];
           //nếu như bỏ trống tên sản phẩm
           if (empty($_POST['ten_sp'])) {
               //push lỗi vào trong mảng
               $errors[] = "Không được để trống tên sản phẩm";
           }
           if (empty($_POST['don_gia'])) {
               $errors[] = "Không được để trống đơn giá";
           }
           //nếu có lỗi thì mảng error có phần tử
           if (count($errors) > 0) {
//               $_SESSION['errors'] = $errors;
//               header('location:'.BASE_URL.'add-product');die;
               redirect('errors',$errors,'add-product');
           } else {
               $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
               if ($result) {
//                   $_SESSION['success'] = "Thêm sản phẩm thành công";
//                   header('location:'.BASE_URL.'add-product');die;

                   redirect('success',"Thêm sản phẩm thành công",'add-product');
               }
           }
       }
    }
    public function edit($id) {
        $product = $this->product->getDetailProduct($id);
        $this->render('product.edit',compact('product'));

    }
    public function editPost($id) {
        if (isset($_POST['sua'])) {
            $result = $this->product->updateProduct($id,$_POST['ten_sp'],$_POST['don_gia']);
            if ($result) {
                redirect('success',"Sửa thành công",'edit-product/'.$id);
            }
        }
    }
}