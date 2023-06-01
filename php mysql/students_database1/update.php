<?php
    require("config.php");

    $id=$_GET['update'];
    $sel="SELECT * FROM students_table WHERE id='$id'";
    $qry=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($qry);

    if(!empty($_POST)){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];

        if(preg_match('/@.+\./',$email) && preg_match('/^[0-9]{11,13}+$/',$number) && preg_match('/^[A-Za-z]{3,14}+$/',$name)){
            $update="UPDATE students_table SET id='$id',user_name='$name', user_email='$email', user_number='$number' where id ='$id'";
            if(mysqli_query($con,$update)){
                header('location:display.php');
            }
        }else{
            echo "Data Input Error";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            
            <form class="border p-5 m-5" method="post">
            <h2 class=" ">Update User</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['user_name'] ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" class="form-control"  name="email" value="<?= $data['user_email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Number</label>
                    <input type="text" class="form-control"  name="number" value="<?= $data['user_number'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </form>

        </div>

    </div>
</body>
</html>

