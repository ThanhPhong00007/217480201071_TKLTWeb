<?php
    require "Connection.php";
    $sql = "INSERT INTO hanghoa(`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) VALUES ('TO03','Toshiba Z3','TO','2024','5000000')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "Đã thêm dữ liệu.";
    }
    else {
        echo "Không thêm được.";
    }
?>