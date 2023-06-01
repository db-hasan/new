<?php
    require('config.php');
    $id=$_GET['delete_id'];
    if(isset($id)){
        $delete="DELETE FROM students_table WHERE id='$id'";
        if(mysqli_query($con,$delete)){
            header("location:display.php");
        }else{
            die(mysqli_error($con,$sql));
        }
    }
?>

