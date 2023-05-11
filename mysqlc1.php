<?php

//konse server se connection kar na ha ye batana padega
//creating connection
$severname="localhost";
$username="root"; // root have every right with higest hirarchy
$password="";


$conn=new mysqli($severname,$username,$password);
//check connection
if($conn->connect_error)
{
    die("tumm se na ho paye ga!".$conn->connect_error);
}
echo "shabash munna";
//if I want to create a new data base in mysqi
$sqi="CREATE DATABASE phpdb2";
$result=mysqli_query($conn,$sqi); // if query if failed then mysqi_query returns false 
if($result)
{
    echo "Data bse is successfuly created";
}
else
{
    echo mysqli_error;
}
mysqli_free_result($sqi);
mysqli_close();
?>
