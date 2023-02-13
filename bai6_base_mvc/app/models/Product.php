<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";

    //lấy danh sách product
    public function getProduct() {
        $sql = "select * from $this->table";
        //set câu truy vấn cho class basemodel
        $this->setQuery($sql);
        return $this->loadAllRows();
    }


}