<?php
session_start();

$email=$_POST['email'];
$name=$_POST['name'];

$_SESSION['email']=$email;

if(isset($_SESSION['email']))
{
    echo "you are old costumer";
}
else
{
    echo "sorry you are logged out";
    header("Location: sessionlogin.html");
    
}

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
<a href="sessionlogin.html">Login Page</a>
<br>
<button name="logout" value="logout"><a href="logout.php">Logout</a></button>
</body>
</html>