<?php
class SinhVien {
    //khai báo thuộc tính tức là khai báo biến
    public $tenSV;
    public $maSV;
    public $namSinh;
    //hàm khởi tạo   (hàm đặc biệt)
    public function __construct($tenSV,$maSV,$namSinh)
    {
        $this->tenSV = $tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }

    //xây dựng phương thức set
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    //khai báo phương thức từ là khai báo hàm
    public function hienThiThongTin(){
        echo "Tên SV: ".$this->tenSV."Mã SV: ".$this->maSV.
            "Năm Sinh".$this->namSinh."tuổi".$this->tinhTuoi();
    }
}

//khởi tạo đối tượng (Có new được
$sv1 = new SinhVien("AAA","PH12345",2000);
$sv1->setTenSV("Thắng");
$sv1->hienThiThongTin();
//$sv2 = new SinhVien();
//$sv2->hienThiThongTin();
//Tạo 1 class GiangVien bao gồm thuộc tính maGV,tenGV,namSinh,luongCB,soGioDay
// xây dựng hàm khởi tạo cho các thuộc tính trên
//xây dựng hàm tính tuổi có trả về  (tuổi = năm hiện tại - năm sinh )
//xây dựng hàm tính tổng lương(Có trả về)(tongluong = luongCB * soGioDay)
//xây dựng hàm xếp loại dựa vào tổng lương :
//-tổng lương >=5000 đạt
//-tổng lương < 5000 ko đạt
//xây dựng hàm hiển thị thông tin GV gồm maGV-tenGV-tuổi-tổnglương,xếp loại;
// tạo ra 3 ông giàng viên bất kỳ
?>