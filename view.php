<?php
require_once("DB.php");
?>
<!Doctype html>
<head>
    <title>hello</title>
    <link rel="stylesheet" href="style.css">

</head> 
<body>
<table width="1000" border="5" align="center">
<caption>view database</caption>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>SSN</th>
    <th>Department</th>
    <th>salary</th>
    <th>Homeaddress</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>

<?php
global $ConnectingDB;
$sql="SELECT * FROM emp_record";
$stmt= $ConnectingDB->query($sql);
while($DataRows=$stmt->fetch())
{
    $ID=$DataRows["id"];
    $Name=$DataRows["Ename"];
    $SSN=$DataRows["ssn"];
    $Department=$DataRows["dept"];
    $salary=$DataRows["salary"];
    $Homeaddress=$DataRows["homeaddress"];




?>
<tr>
<td><?php echo $ID?></td>
<td><?php echo $Name?></td>
<td><?php echo $SSN?></td>
<td><?php echo $Department?></td>
<td><?php echo $salary?></td>
<td><?php echo $Homeaddress?></td>
<td><a href="update.php?id=<?php echo $ID;?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $ID;?>">Delete</a></td>
<?php } ?>
</tr>
</table>
</body>
<html>