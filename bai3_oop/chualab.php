<?php
//tạo 1 class ConNguoi gồm thuộc tính hoten,diachi,namsinh,sdt,email
// gồm phương thức tinhTuoi (Có trả về ) = năm hiện tại - năm sinh
// tạo các phương thức set giá trị cho các thuộc tính trên
//tạo 1 class SinhVien kế thừa ConNguoi gồm thuộc tính điểm toán,điểm lý,điểm hóa
// tạo các phương thức set giá trị cho các thuộc tính trên
// tạo phương thức tính điểm TB (Có trả về ) (Toán + lý + hóa )/3
//tạo phương thức hiển thị thông tin gồm hoten,diachi,tuổi,sdt,email,điểmTB
//tạo 1 class GiangVien kế thừa ConNguoi gồm các thuộc tính lươngcb,số giờ dạy
//tạo phương thức tổng lương(Có trả về) = lươngcb * số giờ dạy
//tạo phương thức hiển thị thông tin gồm hoten,diachi,tuổi,sdt,email,tổng lương
//* sử dụng hàm khởi tạo để set giá trị cho các thuộc tính của class cha và class con
class ConNguoi {
    public $hoten;
    public $diachi;
    public $namsinh;
    public $sdt;
    public $email;

    public function tinhTuoi() {
        return date('Y') - $this->namsinh;
    }

    public function setNamSinh($namsinh) {
        $this->namsinh = $namsinh;
    }
    //tự tạo những hàm set khác

    public function hienThiThongTin() {
        echo $this->hoten."-".$this->diachi."-".$this->tinhTuoi();
    }
}
class SinhVien extends ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function setDiemToan($diemToan) {
        $this->diemToan = $diemToan;
    }
    public function setDiemLy($diemLy) {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) /3;
    }
    public function hienThiThongTinSV() {
        $this->hienThiThongTin();
        echo $this->tinhDiemTB();
    }
}