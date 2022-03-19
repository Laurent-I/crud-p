<?php
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data into database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class = "success"><?php echo @$_GET['id'] ?></h2>
    <table width = "1000" border = "5" align = "center" >
        <caption>View From Database</caption>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>SSN</th>
          <th>Department</th>
          <th>Salary</th>  
          <th>HomeAddress</th>  
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        $Connect;
        $sql = "SELECT * FROM emp_record";
        $stmt = $Connect->query($sql);
        while($DataRows=$stmt->fetch()){
            $Id = $DataRows["id"];
            $Ename = $DataRows["ename"];
            $SSN = $DataRows["ssn"];
            $Department = $DataRows["dept"];
            $Salary = $DataRows["salary"];
            $HomeAddress = $DataRows["homeaddress"];

        
     ?>
     <tr>
         <td><?php echo $Id;?></td>
         <td><?php echo $Ename;?></td>
         <td><?php echo $SSN;?></td>
         <td><?php echo $Department;?></td>
         <td><?php echo $Salary;?></td>
         <td><?php echo $HomeAddress;?></td>
         <td><a href="Update.php?id=<?php echo $Id; ?>">Update</a></td>
         <td><a href="Delete.php?id=<?php echo $Id; ?>">Delete</a></td>
     </tr>
     <?php } ?>
    </table>

    <div>
  <button class= "btn"><a href="index.php" class="txt">Add User</a></button>
    </div>
</body>
</html>