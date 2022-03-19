<?php
    include 'connect.php';
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
      $fname= $_POST['fname'];
      $lname= $_POST['lname'];
      $email= $_POST['email'];
      $tel= $_POST['tel'];
      $sex= $_POST['gender'];
      $user= $_POST['uname'];
      $nation= $_POST['nation'];
      $pass= $_POST['pass'];
      $con;
      $sql = "UPDATE crudtable SET firstname = '$fname', lastname= '$lname', email = '$email', telephone = '$tel', gender = '$sex', username = '$user' , nationality = '$nation', password = '$pass' WHERE id = '$id'";
      $result = mysqli_query($con , $sql);
      if($result){
        // echo "Updated successfully";
            header('location:read.php');
        } else{
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operations</title>
  </head>
  <body>
    <?php 
    $con;
    $sql = "SELECT * FROM crudtable WHERE id = '$id'";
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
    }
    ?>
<div class="container my-5">
<form action = "update.php?id=<?php echo $id; ?>" method = "post">
    <h2>Update Account</h2><br>
  <div class="mb-3">
    <label> First Name</label>
    <input type="text" class="form-control" placeholder = "Enter your name" name = "fname" value="<?= $fname ?>">
</div> 
<div class="mb-3">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder = "Enter your email" name = "lname" value="<?= $lname ?>">
</div> 
<div class="mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control" placeholder = "Enter your email address" name = "email" value="<?= $email ?>">
</div> 
<div class="mb-3">
    <label>Telephone</label>
    <input type="tel" class="form-control" placeholder = "Enter your mobile number" name = "tel" value="<?= $tel ?>">
    <label class="form-check-label" for="flexRadioDefault1">Gender
  </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value = "<?= $gender ?>" >Male
</div>
<div class="form-check">
  <label class="form-check-label" for="flexRadioDefault1">
  </label>
  <input class="form-check-input" type="radio" name="gender" value = "<?= $gender?>">Female
</div>
</div> 
<div class="mb-3">
    <label for="" class="form-label">User Name</label>
    <input type="text" class="form-control" name = "uname" placeholder = "Enter your username"  value="<?= $user ?>">
</div>
<label for="" class="form-label">Nationality</label>
<select class="form-select" name = "nation">
  <option selected value="<?= $nation ?>">--select--</option>
  <option value="Rwandan">Rwandan</option>
  <option value="Ugandan"  >Ugandan</option>
  <option value="Kenyan"  >Kenyan</option>
</select>
<div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder = "Enter your password" name = "pass" value="<?= $pass ?>">
</div> 
<div class="mb-3">
    <label for="" class="form-label"> Confirm Password</label>
    <input type="password" class="form-control" name = "cpass" placeholder = "Confirm your password" value="<?= $pass ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>