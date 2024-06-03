<?php
    require"Connection.php";
    $sql = "UPDATE `hanghoa` SET MaHang='AS03',TenHang='HieuNoob' WHERE MaHang='AS02'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Cập nhật thành công.";
    }
    else {
        echo "Cập nhật thất bại.";
    }
?>