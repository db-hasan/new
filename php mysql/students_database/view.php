<?php 
	require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Table</title>
  </head>
  <body>
    <table border="1" style="border-collapse: collapse">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sel="SELECT * FROM view_product ORDER BY id DESC";
          $qry=mysqli_query($con, $sel);
          while($data=mysqli_fetch_assoc($qry)){
        ?>
        <tr>
          <td><?= $data['id'] ; ?></td>
          <td><?= $data['product_name'] ; ?></td>
          <td><?= $data['product_price'] ; ?></td>
          <td><?= $data['user_number'] ; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
CREATE VIEW view_product AS
SELECT * FROM product WHERE product_price >500 ORDER by product_name;
