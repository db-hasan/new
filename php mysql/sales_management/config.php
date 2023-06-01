<?php
    $localhost="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="sales_management";

    $con=mysqli_connect($localhost,$db_user,$db_pass,$db_name);
    if(!$con){
        die(mysqli_error($con));
    }



?>