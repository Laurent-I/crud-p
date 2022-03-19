<?php
 include 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql= "DELETE from crudtable where id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        // echo "Deleted successfully";
        header('location:read.php');
    }else{
        die(mysqli_error($con));
    }
}

 ?>