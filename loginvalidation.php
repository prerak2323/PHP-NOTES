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
$email="perakgupta23@gmail.com";
$sql="select Email from userinfo where Email='$email'";
$query=mysqli_query($conn,$sql);

// mysqli_num_rows($result) function returns the number of rows in a result set
//hence here we can check that if there is any row that is equal to variable email

if(mysqli_num_rows($query)!=0)
{
    echo "user already exist";
}
else
{
    echo "new user registered";
}
mysqli_close();
?>