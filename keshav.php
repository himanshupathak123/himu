<!DOCTYPE html>
<head>
    <title>Invoice</title>
    <style>
body{
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
h1{
    text-align: center;
    font-style: italic;
    color: green;
}
</style>
</head>
<body>
    <h1>payment statement</h1><br>
<?php
$pay=$_POST['pay'];
$fname=$_POST['firstname'];
$Email=$_POST['email'];
$address=$_POST['address'];
$City=$_POST['city'];
$state=$_POST['state'];
$con=new mysqli("localhost","root","","himanshu");
if($con->connect_error)
{
    die("Failed to connect".$con->connect_error);

}
else{
    $stmt=$con->prepare("Insert into hello(Name,Email,Address,City,State,pay)value(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$fname,$Email,$address,$City,$state,$pay);
    $stmt->execute();
    $stmt->close();
    $con->close();
    echo "Name: $fname<br>";
echo "Email: $Email <br>";
echo "Address: $address <br>";
echo "City :$City <br>";
echo "State :$state <br>";
echo "paid: $pay <br>";
}
?>
</body>
</html>