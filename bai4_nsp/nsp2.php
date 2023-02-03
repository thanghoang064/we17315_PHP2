<?php
namespace NSP2;
class SinhVien {
    public $ten;
    public $namsinh;
    public function __construct($ten,$namsinh)
    {
        $this->ten = $ten;
        $this->namsinh = $namsinh;
    }
    public function hienThiThongTinSinhVien() {
        echo "Tên ".$this->ten;
        echo "năm sinh ".$this->namsinh;
    }
}