<?php
    require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary mt-5"><a href="form.php" class="text-light"> Add New</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sel="SELECT * FROM students_table ORDER BY id DESC";
                    $qry=mysqli_query($con, $sel);
                    while($data=mysqli_fetch_assoc($qry)){
                ?>
                <tr>
                    <td><?= $data['id'] ; ?></td>
                    <td><?= $data['user_name'] ; ?></td>
                    <td><?= $data['user_email'] ; ?></td>
                    <td><?= $data['user_number'] ; ?></td>
                    <td><a class="btn btn-primary" href="update.php ? update=<?= $data['id'] ; ?>"> Update</a></td>
                    <td><a class="btn btn-danger" href="delete.php ? delete_id=<?= $data['id'] ; ?>"> Delete</a></td> 
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
