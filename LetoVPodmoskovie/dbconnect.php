<?php
    $mysqli = mysqli_connect("LetoVPodmoskovie","root","","LetoVPodmoskovie");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>