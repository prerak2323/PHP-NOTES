<?php

$servername="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
    die("nahi ho paya");
}
else
{
    echo " connection done";
}

$email=$_POST['email'];
$pas=$_POST['Pass'];
//checking if the user alread exist or not
$sql1="SELECT *FROM userinfo WHERE Email='$email'";
$result1=mysqli_query($conn,$sql1);
if($result1)
{
   echo "user already exist";
}
else 
{
$sql1="insert into userinfo values ('$email','$pas',now())";

$result=mysqli_query($conn,$sql1);

}




$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="loginform.html">go back</a>
</body>
</html>