<?php
require_once "models/db.php";
function getProduct() {
    $sql = "select * from product";
    return getData($sql);
}
function tinhDienTichHCN($a,$b) {
    echo $a * $b;
}
function tinhChuViHCN($a,$b) {
    echo ($a + $b)*2;
}
//HCN1 CD Ban đầu 7 CR ban đầu là 5 -> thay đổi CD = 8
tinhDienTichHCN(8,5);
tinhChuViHCN(7,5);
//HCN2
tinhDienTichHCN(7,5);
tinhChuViHCN(7,5);
tinhDienTichHCN(7,5);
tinhChuViHCN(7,5);
tinhDienTichHCN(7,5);
tinhChuViHCN(7,5);
?>