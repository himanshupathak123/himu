<?php

require_once("DB.php");
if(isset($_POST["Submit"]))
{
    if(!empty($_POST["Ename"])&&!empty($_POST["SSN"]))
    {
      $Ename=$_POST["Ename"];
      $security=$_POST["SSN"];
      $department=$_POST["Dept"];
      $salary=$_POST["Salary"];
      $home=$_POST["HomeA"];
      global $ConnectingDB;
      $sql="INSERT INTO emp_record(Ename,ssn,dept,salary,homeaddress) VALUES(:enamE,:ssN,:depT,:salarY,:homeaddresS)";
      $stmt=$ConnectingDB->prepare($sql);
      $stmt->bindValue(':enamE',$Ename);
      $stmt->bindValue(':ssN',$security);
      $stmt->bindValue(':depT',$department);
      $stmt->bindValue(':salarY',$salary);
      $stmt->bindValue(':homeaddresS',$home);
      $Execute=$stmt->execute();
      if($Execute)
      {
        echo "record has been added";
      }
    }
    else
    {
      echo"please atleast name and ssn";
      
    }
   

}
?>


<!DOCTYPE html>
<head>
    <title>hello</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <form action="insertintodatabase.php"method=post>
    <fieldset>
   <span class="fieldinfo">Employee Name</span>
    <input type="text" name="Ename" value="">
    <br>
    <span class="fieldinfo">Social security number</span>
    <input type="text" name="SSN" value="">
    <br>
    <span class="fieldinfo">Department</span>
    <input type="text" name="Dept" value="">
    <br>
    <span class="fieldinfo">Salary</span>
    <input type="text" name="Salary" value="">
    <br>
    <span class="fieldinfo">Home address</span><br>
    <textarea name="HomeA" rows="8" cols="80"></textarea>
    <br>
    <input type="submit" name="Submit" value="submit record">
    </fieldset>

    </form>
</div>
</body>
</html>