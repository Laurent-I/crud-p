<?php
$DbHost = "localhost";
$DbUser = "root";
$Dbpass = "";
$Database = "class_crud";

$con = mysqli_connect($DbHost,$DbUser,$Dbpass,$Database);
if(!$con){
    echo "Connection Error";
}
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
    <!-- <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table"> -->
  <thead>
    <tr>
      <th scope="col">UserId</th>
      <th scope="col">First Name </th>
      <th scope="col">Last Name</th>
      <th scope="col">Telephone</th>
      <th scope="col">Gender </th>
      <th scope="col">Nationality</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<?php

$sql = "select * from `mis_users`";
$result = mysqli_query($con, $sql);

if($result){
    // $row = mysqli_fetch_assoc($result);
    // echo $row['name'];
    // $row = mysqli_fetch_assoc($result);
    // echo $row['name'];
    while( $row = mysqli_fetch_assoc($result)){
        $id = $row['User_id'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $tel = $row['telephone'];
        $gender = $row['gender'];
        $nation = $row['nationality'];
        $username= $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        echo '<tr>
        <th scope = "row"> '.$id.'</th>
        <td> '.$fname.' </td> 
        <td> '.$lname.' </td> 
        <td> '.$tel.' </td> 
        <td> '.$gender.' </td>
        <td> '.$nation.' </td>
        <td> '.$username.' </td>
        <td> '.$email.' </td>
        <td> '.$password.' </td>
    
        </tr>';
    }
}






?>




</table> 
    </div>
</body>
</html>