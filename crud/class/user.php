<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Create Account</h1>
    <form action = "connection.php" method = "post">
  <div class="mb-3">
    <label for="" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" >
</div>
    <div class="mb-3">
    <label for="" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" >
</div>
    <div class="mb-3">
    <label for="" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
</div>
    <div class="mb-3">
    <label for="" class="form-label">Telephone</label>
    <input type="tel" class="form-control" name = "tel" >
</div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <div class="form-check">
  <label class="form-check-label" for="flexRadioDefault1">
  </label>
  <input class="form-check-input" type="radio" name="gender" value = "Male" >Male
</div>
<div class="form-check">
  <label class="form-check-label" for="flexRadioDefault1">
  </label>
  <input class="form-check-input" type="radio" name="gender" value = "female">Female
</div>
<div class="mb-3">
    <label for="" class="form-label">User Name</label>
    <input type="text" class="form-control" name = "username" >
</div>
<label for="" class="form-label">Nationality</label>
<select class="form-select" name = "nation">
  <option selected>--select--</option>
  <option value="Rwanda">Rwanda</option>
  <option value="Uganda"  >Uganda</option>
  <option value="Kenya"  >Kenya</option>
</select>
<div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" name = "pass" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label"> Confirm Password</label>
    <input type="password" class="form-control" name = "cpass">
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Register</button>
</form>
</body>
</html>