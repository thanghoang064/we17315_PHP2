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
    public function getDetailProduct($id) {
        $sql = "select * from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateProduct($id,$ten_sp,$gia) {
        $sql = "update $this->table set ten_sp = ?,gia = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$ten_sp,$gia,$id]);
    }
    public function deleteProduct($id) {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }



}