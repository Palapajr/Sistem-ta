<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pkh_pnn";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        mysqli_query($conn, "TRUNCATE TABLE `testing`");
        header ("Location: data_testing.php");
        exit;
    }

   mysqli_close($conn);
 ?>