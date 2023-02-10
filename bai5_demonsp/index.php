<?php
//khởi tạo category controller và customer controller
//require_once "controllers/CategoryController.php";
//require_once "controllers/CustomerController.php";
//require  "models/Customer.php";
require "vendor/autoload.php";
use App\Controllers\CategoryController;
use App\Controllers\CustomerController;
use App\Models\Customer;
$cateController = new CategoryController();
$cusController = new CustomerController();
$cus = new Customer();