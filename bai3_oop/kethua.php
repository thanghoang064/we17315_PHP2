<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an() {
        echo "ăn bằng mồm";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
}
class NguoiLon extends ConNguoi {

    public $longnach;

    public function di() {
        echo "đi bằng".$this->chan."Chân";
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {

    public function bo() {
        echo "Trẻ con bò bằng".$this->chan;
    }

}
//khởi tạo 1 tk người lớn
$nl1 = new NguoiLon();
$nl1->an();
$nl1->setChan(2);
$nl1->di();
//khởi tạo 1 tk trẻ con
$tc1 = new TreCon();
$tc1->an();
$tc1->setChan(2);
$tc1->bo();


?>