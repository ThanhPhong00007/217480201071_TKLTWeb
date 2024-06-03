<?php
    require("Connection.php");
    $makh = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaKH"])) {
            $makh = $_POST['txtMaKH'];
        }
        $sql = "SELECT * FROM `hoadon` WHERE `MaKH`='$makh'";
        if ($result = mysqli_query($conn, $sql)) {
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['MaHD'];
                    echo "|";
                    echo $row['MaKH'];
                    echo "|";
                    echo $row['MaHang'];
                    echo "|";
                    echo $row['SoLuong'];
                    echo "|";
                    echo $row['ThanhTien'];
                    echo "\n";
                }
                mysqli_free_result($result);
            }
        } else {
            echo "No Records";
        }
    }
    mysqli_close($conn);
?>