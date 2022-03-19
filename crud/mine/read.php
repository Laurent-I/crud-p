<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="create.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> First Name </th>
      <th scope="col"> Last Name </th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender </th>
      <th scope="col">User name</th>
      <th scope="col"> Nationality </th>
      <th scope="col">Password</th>
      <th scope="col"> Operations </th>
    </tr>
  </thead>
  <?php

  $sql = "SELECT * FROM crudtable";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $fname = $row['firstname'];
      $lname = $row['lastname'];
      $email = $row['email'];
      $tel = $row['telephone'];
      $gender = $row['gender'];
      $user = $row['username'];
      $nation= $row['nationality'];
      $pass = $row['password'];
  ?>
  <tr>
  <th scope = "row"><?php echo $id; ?></th>
  <td><?php echo $fname; ?></td>
  <td><?php echo $lname; ?></td>
  <td><?php echo $email; ?></td>
  <td><?php echo $tel; ?></td>
  <td><?php echo $gender; ?></td>
  <td><?php echo $user; ?></td>
  <td><?php echo $nation; ?></td>
  <td><?php echo $pass; ?></td>
  <td>
  <button class="btn btn-primary " ><a href="update.php?id=<?php echo $id ; ?>" class= " text-light">Update</a></button>
    <button class= "btn btn-danger"><a href="delete.php?id=<?php echo $id ; ?>" class= " text-light">Delete</a></button>
</td> 
  </tr>
  <?php } ?>
  </table>
  </div>
  </body>
  </html>