<?php
$servername="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($servername,$username,$password,$database);
//check connection using if else *
if($conn->connect_error)
{
    die("bhadd me jao nahi hua");
}
else 
{
    echo "kya baat beta akhir kar hi diya";
}
//$id=$_POST['id'];
//$name=$_POST['name'];
//$sql="insert into userrec value ('$id','$name',now())";
//$result=mysqli_query($conn,$sql);

//echo "app soochit kiya jata ha ki kamm pura hua \n dhanayad!!!!";

//selecting and displaying data from mysqli

$sql1="select * from userrec";
$result1=mysqli_query($conn,$sql1);

// find the no of records returned
echo mysqli_num_rows($result1);
echo "<br>";

//rows returend by the squli_query
$num=mysqli_num_rows($result1);
if($num>0)
{
    $row=mysqli_fetch_assoc($result1); //mysqli_fetch_assoc returns records untill end of db, '_fetch' fetches record '_assoc' means associative array returned
    echo var_dump($row);
    echo "<br>";
}
mysqli_close($conn);

?>