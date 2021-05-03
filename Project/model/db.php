<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecommerce";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 
 function CheckUser($conn,$table, $userId, $password)
 {
$sql = $conn->query("SELECT * FROM ". $table." WHERE username ='". $userId."' AND password='". $password."'");
 return $sql;
 }
 
 function UserInfoTable($conn, $userId,$name,$password,$email,$gender,$phone,$bloodGroup,$dob)
 
{
$flag=1;

$stmt = $conn->prepare("INSERT INTO registration (userId, name,password, email, gender,phone,bloodGroup,dob) VALUES (?, ?, ?, ?, ?, ?, ?,?)");


$stmt->bind_param("ssssssss", $userId, $name,$password, $email, $gender, $phone, $bloodGroup,$dob);

$stmt->execute();
$stmt->close();

return $flag;
 }
 

 
 
 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>

