<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   table,tr,td ,th{
    border:2px solid black;
    border-collapse:collapse;
    width:70%;
    margin:auto;
    box-shadow:2px 2px 2px  black;
    }
</style>
<body>
    <?php
$host = "localhost";
$db_username = "root";
$userPassword =  "";
$db_name = "class_crud";
$connection = mysqli_connect($host,$db_username,$userPassword,$db_name);
if($connection){
    echo "Connected to the db...";
    $select = mysqli_query($connection,"SELECT * from mis_users") or die("Error:".mysqli_error($connection));
    // echo "<table><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Gender</th><th>Email</th><th>Tel</th><th>Nationality</th><th>UserName</th></tr>";
    //  while($row = mysqli_fetch_assoc($select)){
    //      echo "<tr>";
    //      echo "<td>".$row['user_id']."</td>";
    //      echo "<td>".$row['firstName']."</td>";
    //      echo "<td>".$row['lastName']."</td>";
    //      echo "<td>".$row['gender']."</td>";
    //      echo "<td>".$row['email']."</td>";
    //      echo "<td>".$row['telephone']."</td>";
    //      echo "<td>".$row['nationality']."</td>";
    //      echo "<td>".$row['username']."</td>";
    //  }
    ?>
   <table><tr>
       <th>ID</th>
       <th>FirstName</th>
       <th>LastName</th>
       <th>Gender</th>
       <th>Email</th>
       <th>Tel</th>
       <th>Nationality</th>
       <th>UserName</th>
    <th>Operations</th></tr>
<?php
        while($row = mysqli_fetch_assoc($select)){;
?>
<tr><td><?= $row["user_id"]?></td>
<td><?= $row["firstName"]?></td>
<td><?= $row["lastName"]?></td>
<td><?= $row["gender"]?></td>
<td><?= $row["email"]?></td>
<td><?= $row["telephone"]?></td>
<td><?= $row["nationality"]?></td>
<td><?= $row["username"]?></td>
<td> <?php echo "<a href =useredit.php?userid=".$row['user_id'].">Update</a>"?> </td>
</tr>
<?php } ?> 
   </table>
    <?php
}
else{
   echo "Error:".mysqli_connect_error();
}
?>
</body>
</html>