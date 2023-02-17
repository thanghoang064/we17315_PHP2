<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});
//khu vực mình quan tâm ---start
$router->get('test', [App\Controllers\ProductController::class, 'index']);
//route add-product chỉ lấy được ra view product
//route add-product-post mới thực hiện được hành động thêm
$router->get('add-product',[App\Controllers\ProductController::class, 'add']);
$router->post('add-product-post',[App\Controllers\ProductController::class, 'postProduct']);
//tạo route để lấy được ra view edit
$router->get('edit-product/{id}',[App\Controllers\ProductController::class,'edit']);
//tạo route để post được  edit
$router->post('edit-product-post/{id}',[App\Controllers\ProductController::class,'editPost']);
//tạo mẫu 1 route có đường dẫn là add-product và trỏ đến hàm
// addProduct trong ProductController
//khu vực mình quan tâm ---end
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>