<?php
    $server = "sql202.epizy.com";
    $user = "epiz_31383573";
    $pass = "8sQlurOkrZ6";
    $db = "epiz_31383573_jk_cars";

    $con = mysqli_connect($server,$user,$pass,$db);
    if(!$con){
        die("Connection Error....!".mysqli_connect_error());
    }
?>