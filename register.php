<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
   die('could not connect:'.mysqli_connect_error());
}
echo 'connected successfully<br/>';
$stmt=$conn->prepare("INSERT INTO register(first name,last name,user name,password,conform password,address) VALUES(?,?)");
$stmt->bind_param($u,$p,$f,$l,$c,$a);
// set parameters and execute
$f=$_POST["first name"];
$l=$_POST["last name"];
$u=$_POST["user"];
$p=$_POST["pass"];
$c=$_POST["conform pass"];
$a=$_POST["address"];
$stmt->execute();
echo "Record inserted successfully";
$stmt->close();
$conn->close();
header("refresh:2; url=home.html");
?>
