<?php
$servername="localhost";
$username="root";
$password="";
$datbase="phpdb2";

//creating connection 
$conn= new mysqli($servername,$username,$password,$datbase);
// $sqi="update INTO userrec VALUES(2,'prerak gupta',now());";
// $result=mysqli_query($conn,$sqi);
// if($result)
// {
   // echo "ho gaya";
 // }
//inserting values in table using php variables
// we can use php variables in mysqli_query comfortably 
$name="vikrant";
$id="069";
$sqi="Insert into userrec values('$id','$name',now())";
$result=mysqli_query($conn,$sqi);
 if($result)
 {
    echo "ho gaya";
  }

mysqli_free_result($sqi);
mysqli_close();
?>