
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
</head>
<body>
    <h1>products</h1>
    <?php
    session_start();
   // if(isset($_POST['products'])) //if the variable is present, you can assume that the form has been submitted and info has already been stored in $_SESSION super global
  //  {
    /*   if(!empty($_SESSION['products'])) /* If the array exists, it was
        populated on a previous visit to this script, so the code merges it with the
        $_POST[‘form_products’] array, extracts the unique elements, and assigns the
        result back to the $products array (lines 14–16). Then the $products array is added
        to the $_SESSION superglobal on line 17 */
     //   {
      //      $products=array_unique(array_merge(unserialize($_SESSION['products']),$_POST['form_products']));
        //    $_SESSION['products']=serialize($products);
            /*  The serialize() function is just given a compatible shape to a complex data structure that the PHP can handle
            that data after that you can reverse the work by using the unserialize() function. */
      //  }
      //  else {
       //     $_SESSION['products']=serialize($_POST['form_products']);
      //  }
    //    echo "your products have  been registered";
   // }
   if(!isset($_POST['form_product[]'])){
   // $products=array();
    $_SESSION['products']=$_POST['form_products'];
    echo "registered";}
    ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p><label for="form_products">Select Some Products:</label><br>
<select id="form_products" name="form_products[]" multiple="multiple" size="10">
<option value="sonic screwdriver">Sonic Screwdriver</option>
<option value="hall">Hal 2000</option>
</select>
</p>
<button type="submit" name="submit" value="choose">Submit Form</button>
</form>
<p><a href="session2a.php">go to content page</a></p>
</body>
</html>
