<?php
$a = 5;//kiểu số nguyên
$b = "FPT POLY"; //kiểu chữ
$c = false;//kiểu boolean
//echo $b.$a;
//mảng tuần tự
$mang = [1,2,3,4,75,90];
//echo $mang[4]."-".$mang[5];
//echo "<pre>";
////var_dump($mang);// in mảng
//echo print_r($mang);
//duyêt mảng để in từng phần tử
//foreach ($mang as $key=>$value) {
//    if ($value % 2 == 0) {
//        echo $value . "</br>";
//    }
//}
// in những phần tử trong mảng là số chẵn
//mảng liên hợp (key=>value)
$manglh = ["A"=>10,"B"=>12,"C"=>13,"D"=>14];
//echo $manglh["B"];
// số 10 và số 14
$color = ["red"=>"Màu đỏ","green"=>"Màu xanh lá","blue"=>"Màu xanh dương"];
// yêu cầu đổ mảng màu ra bảng với giá trị là tên màu bằng tiếng việt
// mỗi 1 dòng sẽc được tô màu tương ứng với giá trị
// tạo 1 mảng gồm những key tensv,masv,tuoi,diachi
//yêu cầu in tensv,masv,tuoi,diachi ra bảng theo hàng ngang
//với tuổi >=18 tô màu đỏ
// với tuổi <18 tô màu xanh
// chỉ tô màu mỗi ô tuổi
$tt = ["tensv"=>"Lê minh thảo","masv"=>"PH1234","tuoi"=>18,"diachi"=>"ABCD"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>KEY</td>
            <td>VALUE</td>
        </tr>
        <?php
            foreach ($manglh as $key => $value) {
        ?>
        <tr>
            <td><?php echo $key;?> </td>
            <td><?php echo $value;?></td>
        </tr>
        <?php } ?>
    </table>
    <table border="1">
        <?php foreach ($color as $key=>$value){ ?>
        <tr>
            <td bgcolor="<?php echo $key; ?>"><?php echo $value; ?></td>
        </tr>
        <?php } ?>
    </table>
    <table border="1">
        <tr>
            <?php foreach ($tt as $key=>$value) {
                $mau = "";
                if ($key == "tuoi") {
                    $mau = $value >= 18 ? "bgcolor='red'" : "bgcolor='blue'";
                }
                ?>
            <td <?php echo $mau; ?>><?php echo $value; ?></td>
            <?php } ?>
        </tr>
    </table>
</body>
</html>
