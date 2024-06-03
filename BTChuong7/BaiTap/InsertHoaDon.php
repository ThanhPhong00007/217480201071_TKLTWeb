<?php
    require("Connection.php");
    $mahd = "";
    $makh = "";
    $mahang= "";
    $soluong = "";
    $thanhtien = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaHD"])) {
            $mahd = $_POST['txtMaHD'];
        }
        if(isset($_POST["txtMaKH"])) {
            $makh = $_POST['txtMaKH'];
        }
        if(isset($_POST["txtMaHang"])) {
            $mahang = $_POST['txtMaHang'];
        }
        if(isset($_POST["txtSoLuong"])) {
            $soluong = $_POST['txtSoLuong'];
        }
        if(isset($_POST["txtThanhTien"])) {
            $thanhtien = $_POST['txtThanhTien'];
        }
        $sql = "INSERT INTO `hoadon`(`MaHD`, `MaKH`, `MaHang`, `SoLuong`, `ThanhTien`) VALUES ('$mahd','$makh','$mahang','$soluong','$thanhtien')";
        if (mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>