<?php
$severname="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection Error");
}

$email=$_POST['email'];
$pass=$_POST['pass'];

$query="select Email from userinfo where Email='$email'";

$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)!=0)
{
    echo "user already exist";
}
else
{
    $query="insert into userinfo values ('$email','$pass',now()) ";
    mysqli_query($conn,$query);
    echo "user already exist";
}

?>