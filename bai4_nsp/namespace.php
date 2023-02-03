<?php
include_once "nsp1.php";
include_once "nsp2.php";
use NSP2 as n2; // đổi tên ngắn đi
use NSP1 as n1;
//sinh viên của namespace NSP2
$sv = new n2\SinhVien("huy",18);
$sv->hienThiThongTin();
//
$gv = new n1\GiangVien();

//sinh viên của namespace NSP1;
$sv1 = new n1\SinhVien("huy",19);

