<?php
require_once("db.php");
if(isset($_POST['Submit'])){
    if(!empty($_POST['Ename'])&&!empty($_POST['SSN']) ){
    $Ename = $_POST['Ename'];
    $SSN = $_POST['SSN'];
    $Dept = $_POST['Dept'];
    $Salary = $_POST['Salary'];
    $Home= $_POST['HomeAddress'];
    $Connect;
    $sql = "INSERT INTO emp_record(ename, ssn, dept, salary, homeaddress)
    VALUES(:enamE, :ssN, :depT, :salarY, :homeaddresS)";
    $stmt = $Connect->prepare($sql);
    $stmt->bindValue(':enamE', $Ename);
    $stmt->bindValue(':ssN', $SSN);
    $stmt->bindValue(':depT', $Dept);
    $stmt->bindValue(':salarY', $Salary);
    $stmt->bindValue(':homeaddresS', $Home);
    $execute = $stmt->execute();
    if($execute){
        // echo '<span class = "success"> Record Has been Added Successfully</span>';
        header('location: view_from_database.php');
    }

    }else{
        echo '<span class = "FieldInfoHeading">   Please atleast add name and social security number</span>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data into database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <form action="index.php" method ="post">
<fieldset>
    <span class = "FieldInfo">Employee Name:</span>
    <br>
    <input type="text" name= "Ename" value = "" autocomplete= "off">
    <br>
    <span class = "FieldInfo">Social Security Number:</span>
    <br>
    <input type="text" name= "SSN" value = "" >
    <br>
    <span class = "FieldInfo">Department:</span>
    <br>
    <input type="text" name= "Dept" value = "" >
    <br>
    <span class = "FieldInfo">Salary:</span>
    <br>
    <input type="text" name= "Salary" value = "" >
    <br>
    <span class = "FieldInfo">Home Address:</span>
    <br>
<textarea name="HomeAddress" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name= "Submit" value= "Submit your record">
</fieldset>
    </form>
    </div>
</body>
</html>