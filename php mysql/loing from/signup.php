<?php
  require('config.php');
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['password'];

      if(!empty($name) && !empty($email) && !empty($pass)){

        $insest = "INSERT INTO users_form(user_name,user_email,user_password) VALUES ('$name', '$email', '$pass' )";
          if(mysqli_query($con,$insest)){
            header('location: login.php');
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>SignUp</title>
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="border p-5 m-5 bg-success" method="post">
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control"name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Signup</button>
            </form>
        </div>
    </div>
  </body>
</html>
