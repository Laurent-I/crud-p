<?php
require_once("db.php");
$searchQueryParameter = $_GET['id'];
if(isset($_POST['Submit'])){
    if(!empty($_POST['Ename'])&&!empty($_POST['SSN']) ){
    $Ename = $_POST['Ename'];
    $SSN = $_POST['SSN'];
    $Dept = $_POST['Dept'];
    $Salary = $_POST['Salary'];
    $Home= $_POST['HomeAddress'];
    $Connect;
    $sql = "DELETE FROM emp_record  WHERE id = '$searchQueryParameter'";
$execute = $Connect->query($sql);
    if($execute){
        echo '<script>window.open("view_from_database.php?id=Record deleted Successfully","_self")</script>';
    }
}

?>
    <?php } ?>
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
    <?php 
    $Connect;
    $sql = "SELECT * FROM emp_record WHERE id ='$searchQueryParameter'";
    $stmt = $Connect->query($sql);
    while($DataRows=$stmt->fetch()){
        $Id = $DataRows["id"];
        $Ename = $DataRows["ename"];
        $SSN = $DataRows["ssn"];
        $Department = $DataRows["dept"];
        $Salary = $DataRows["salary"];
        $HomeAddress = $DataRows["homeaddress"];
    }
    ?>
    <div>
    <form action="delete.php?id=<?php echo $searchQueryParameter ?>" method ="post">
<fieldset>
    <span class = "FieldInfo">Employee Name:</span>
    <br>
    <input type="text" name= "Ename" value = "<?php echo $Ename ?>" autocomplete= "off">
    <br>
    <span class = "FieldInfo">Social Security Number:</span>
    <br>
    <input type="text" name= "SSN" value = "<?php echo $SSN ?>" >
    <br>
    <span class = "FieldInfo">Department:</span>
    <br>
    <input type="text" name= "Dept" value = "<?php echo $Department ?>" >
    <br>
    <span class = "FieldInfo">Salary:</span>
    <br>
    <input type="text" name= "Salary" value = "<?php echo $Salary ?>" >
    <br>
    <span class = "FieldInfo">Home Address:</span>
    <br>
<textarea name="HomeAddress" id="" cols="30" rows="10"><?php echo $HomeAddress ?></textarea>
    <br>
    <input type="submit" name= "Submit" value= "Delete record">
</fieldset>
    </form>
    </div>
</body>
</html>