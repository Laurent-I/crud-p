<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST ['email'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];
$nation = $_POST['nation'];


$DbHost = "localhost";
$DbUser = "root";
$Dbpass = "";
$Database = "class_crud";

$con = mysqli_connect($DbHost,$DbUser,$Dbpass,$Database);
if(!$con){
    echo "Connection Error";
}else{
    $encrpyted = hash("SHA512",$password);
    $insertQuery= "insert into mis_users(firstname,lastname,telephone,gender, nationality,username,email, password) values('$fname', '$lname','$tel', '$gender', '$nation', '$username','$email','$encrpyted')";
    $insert = mysqli_query($con, $insertQuery);
    if($insert){
        header('location:display.php');
        echo "Data added succesfully";
    }else{
        echo "Error Occured". mysqli_error($con);
    }
}
?>
