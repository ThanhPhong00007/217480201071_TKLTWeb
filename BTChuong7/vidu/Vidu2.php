<?php
    require "Connection.php";
    // $servername = "localhost";
    // $database = "quanlybanhang";
    // $username = "root";
    // $password = "";
    // $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT MaHang, TenHang FROM hanghoa";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo("Ma Hang: ".$row["MaHang"].", Ten Hang: ".$row["TenHang"]."<br/>");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>