<?php
    $rs = mysqli_connect($servername, $username, $password, $database);
    $rs = mysqli_connect_error();
    $rs = mysqli_fetch_row($sql);
    $rs = mysqli_fetch_assoc($sql);
    $rs = mysqli_fetch_array($sql, mode);
    $rs = mysqli_num_rows($result);
    $rs = mysqli_query($conn, $sql);
    $rs = mysqli_close($conn);
?>