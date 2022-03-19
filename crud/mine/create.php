<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $sex = $_POST['gender'];
        $user = $_POST['uname'];
        $nation = $_POST['nation'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO crudtable (firstname, lastname, email, telephone, gender, username, nationality, password) VALUES('$fname', '$lname', '$email' , '$tel', '$sex', '$user', '$nation', '$pass')";
        $result = mysqli_query($con, $sql);
        if($result){
          echo "Data entered successfully";
          header('location:read.php');
        }else{
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
<div class="container my-5">
<form method = "post" >
    <h2>Create Account</h2><br>
  <div class="mb-3">
    <label> First Name</label>
    <input type="text" class="form-control" placeholder = "Enter your name" name = "fname">
</div> 
<div class="mb-3">
    <label>Last Name</label>
    <input type="text" class="form-control" placeholder = "Enter your email" name = "lname">
</div> 
<div class="mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control" placeholder = "Enter your email address" name = "email">
</div> 
<div class="mb-3">
    <label>Telephone</label>
    <input type="tel" class="form-control" placeholder = "Enter your mobile number" name = "tel">
    <label class="form-check-label" for="flexRadioDefault1">Gender
  </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value = "Male" >Male
</div>
<div class="form-check">
  <label class="form-check-label" for="flexRadioDefault1">
  </label>
  <input class="form-check-input" type="radio" name="gender" value = "female">Female
</div>
</div> 
<div class="mb-3">
    <label for="" class="form-label">User Name</label>
    <input type="text" class="form-control" name = "uname" placeholder = "Enter your username" >
</div>
<label for="" class="form-label">Nationality</label>
<select class="form-select" name = "nation">
  <option selected>--select--</option>
  <option value="Rwandan">Rwandan</option>
  <option value="Ugandan"  >Ugandan</option>
  <option value="Kenyan"  >Kenyan</option>
</select>
<div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder = "Enter your password" name = "pass">
</div> 
<div class="mb-3">
    <label for="" class="form-label"> Confirm Password</label>
    <input type="password" class="form-control" name = "cpass" placeholder = "Confirm your password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
</html>