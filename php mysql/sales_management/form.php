<?php
    require('config.php');
    if(!empty($_POST)){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $number=$_POST['number'];

        if(!empty($name) && !empty($price) && !empty($number)){

            $insest="INSERT INTO product(product_name,product_price,user_number) VALUES('$name', '$price','$number')";
            if(mysqli_query($con,$insest)){
                header('location:display.php');
            }else{
                echo "Data Input Error";
            }

        }else{
            echo "Please input your Data";
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
<body class="">
    <div class="container">
        <div class="d-flex justify-content-center">
            
            <form class="border p-5 m-5 bg-info" method="post">
                <h2 class="">Input your Data</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input type="text" class="form-control"  name="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Number</label>
                    <input type="text" class="form-control"  name="number">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>