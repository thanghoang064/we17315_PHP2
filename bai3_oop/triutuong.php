<?php
//định nghĩa 1 class trìu tượng
abstract class DongVat {
    //trong class trìu tượng sẽ có phương thức trìu tượng
    abstract function chay();
}
class ConCho extends DongVat {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class NguoiLon extends DongVat {
    public function chay()
    {
        echo "Con người chạy bằng 2 chân";
    }
}
$cc = new ConCho();
$cc->chay();
//xây dựng 1 class Để tính diện tích và chu vi hình chữ nhật
//xây dựng 1 class Để tính diện tích và chu vi hình vuông
//xây dựng 1 class để tính diện tích và chu vi hình thang
// tìm 1 class trìu tượng cho cả 3 class trên và xác định những phương thức trìu tượng
//yêu cầu về nhà
// nếu version <8.0 xóa xampp cài lại
//cài đặt composer trên trang https://getcomposer.org/
// kiểm tra composer bằng cách
// đối với win nhấn chuột phải vào màn hình destop chọn git bash here và chạy lệnh
//composer -v
//đối với mac  vào terminal chạy lệnh composer -v

?>
