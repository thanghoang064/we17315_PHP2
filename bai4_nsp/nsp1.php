<?php
namespace NSP1;
class SinhVien {
    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public function hienThiThongTinSinhVien() {
        echo "Tên ".$this->ten;
        echo "tuổi ".$this->tuoi;
    }
}
class GiangVien {

}