<?php
    $conn = mysqli_connect("localhost", "root", "", "mrcoffee");

    if (mysqli_connect_error()) {
        echo "ERROR" . mysqli_connect_error();
    }

?>