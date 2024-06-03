<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM hanghoa";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo $row['MaHang'];
                echo "|";
                echo $row['TenHang'];
                echo "|";
                echo $row['MaNSX'];
                echo "|";
                echo $row['NamSX'];
                echo "|";
                echo $row['Gia'];
                echo "<br>";
            }
            mysqli_free_result($result);
            
        }
        else {
            echo "No Records";
        }
    }
    else {
        die("Connection failed: ".mysqli_connect_error());
    }
    mysqli_close($conn)
?>