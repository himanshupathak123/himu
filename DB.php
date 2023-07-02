<?php
$Dbname="record";
$dbHost="localhost";
$dbUser="root";
$dbpassword="";

$ConnectingDB=new PDO("mysql:host=$dbHost;dbname=$Dbname",$dbUser,$dbpassword);

?>