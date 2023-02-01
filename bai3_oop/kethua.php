<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    //phương thức khởi tạo
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;

    }

    public function an() {
        echo "ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
}
//khi class con chưa có phương thức khởi tạo thì class con sẽ tự động nhận phương thức
// khởi tạo từ class cha
//khi class con có phương thức khởi tạo thì class con sẽ phụ thuộc vào phương thức
//khởi tạo của chính nó chứ ko nhận của class cha nữa
class NguoiLon extends ConNguoi {

    public $longnach;
    public function __construct($chan,$tay,$mat,$mui,$longnach)
    {
       //gọi hàm khởi tạo của class cha
        parent::__construct($chan,$tay,$mat,$mui);
        $this->longnach = $longnach;
    }

    public function di() {
        echo "đi bằng".$this->chan."Chân".$this->tay."Mặt".$this->mat."Mũi".$this->mui;
        echo $this->longnach;
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {
//    public function __construct()
//    {
//    }

    public function bo() {
        echo "Trẻ con bò bằng".$this->chan;
    }

}
//khởi tạo 1 tk người lớn
$nl1 = new NguoiLon(1,2,3,4,10);
$nl1->an();
//$nl1->setChan(2);
$nl1->di();
//khởi tạo 1 tk trẻ con
//$tc1 = new TreCon();
//$tc1->an();
//$tc1->setChan(2);
//$tc1->bo();


?>