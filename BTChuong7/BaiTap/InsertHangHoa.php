<?php
    require("Connection.php");
    $mahang = "";
    $tenhang = "";
    $mansx= "";
    $namsx = "";
    $gia = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaHang"])) {
            $mahang = $_POST['txtMaHang'];
        }
        if(isset($_POST["txtTenHang"])) {
            $tenhang = $_POST['txtTenHang'];
        }
        if(isset($_POST["txtMaNSX"])) {
            $mansx = $_POST['txtMaNSX'];
        }
        if(isset($_POST["txtNamSX"])) {
            $namsx = $_POST['txtNamSX'];
        }
        if(isset($_POST["txtGia"])) {
            $gia = $_POST['txtGia'];
        }
        $sql = "INSERT INTO `hanghoa`(`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) VALUES ('$mahang','$tenhang','$mansx','$namsx','$gia')";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>