<?php

//konse server se connection kar na ha ye batana padega
//creating connection
$severname="localhost";
$username="root"; // root have every right with higest hirarchy
$password="";
$database="phpdb2";

$conn=new mysqli($severname,$username,$password,$database);
//check connection
if($conn->connect_error)
{
    die("tumm se na ho paye ga!".$conn->connect_error);
}
echo "shabash munna";

$sqi="create table userrec(id int,name varchar(20),login_time datetime)";
$result=mysqli_query($conn,$sqi); // function to run a query;

mysqli_free_result($sqi);
mysqli_close();
?>
