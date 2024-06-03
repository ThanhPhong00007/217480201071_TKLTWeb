<?php
    require "Connection.php";
    $sql = "DELETE FROM `hanghoa` WHERE `MaHang` = 'AS03'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Xóa thành công.";
    } else {
        echo "Xóa thất bại.";
    }
?>