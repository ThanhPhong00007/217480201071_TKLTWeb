<?php
    require("Connection.php");
    $makh = "";
    $tenkh = "";
    $namsinh= "";
    $dienthoai = "";
    $diachi = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaKH"])) {
            $makh = $_POST['txtMaKH'];
        }
        if(isset($_POST["txtTenKH"])) {
            $tenkh = $_POST['txtTenKH'];
        }
        if(isset($_POST["txtNamsinh"])) {
            $namsinh = $_POST['txtNamsinh'];
        }
        if(isset($_POST["txtDT"])) {
            $dienthoai = $_POST['txtDT'];
        }
        if(isset($_POST["txtDiaChi"])) {
            $diachi = $_POST['txtDiaChi'];
        }
        $sql = "UPDATE `khachhang` SET `MaKH`='$makh',`TenKH`='$tenkh',`NamSinh`='$namsinh',`DienThoai`='$dienthoai',`DiaChi`='$diachi' WHERE `MaKH`='$makh'";
        if (mysqli_query($conn, $sql)) {
            echo "Update dữ liệu thành công";
        } else {
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>