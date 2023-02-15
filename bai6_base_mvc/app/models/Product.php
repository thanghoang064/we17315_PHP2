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
    //viết hàm thêm sản phẩm
    public function addProduct($id,$ten_sp,$gia) {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$ten_sp,$gia]);
    }


}