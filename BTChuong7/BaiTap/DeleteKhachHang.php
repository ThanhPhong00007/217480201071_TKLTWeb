<?php
    require("Connection.php");
    $makh = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaKH"])) {
            $makh = $_POST['txtMaKH'];
        }
        $sql = "DELETE FROM `khachhang` WHERE `MaKH`='$makh'";
        if (mysqli_query($conn, $sql)) {
            echo "Xoá dữ liệu thành công";
        } else {
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>