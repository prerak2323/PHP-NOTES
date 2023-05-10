
<?php
/*below code creats a form that allows a user to choose multiple products
you use the session variables to create a rudimentary shopping */
session_start();
// accesing session variables
// if (isset($_SESSION['products'])){
     echo "Your cart:";

     foreach ($_SESSION['products'] as $p) {
     echo $p;
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
    <a href="session2.php">go back</a>
</body>
</html>
<?php
session_destroy();

?>