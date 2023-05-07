<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<! self calling scripts || A HTML form that calls itself>
    <form accept="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label for="guess">Type Your Here</label><br />
            <input type="text" id="guess" name="guess">
        </p>
        <input type="hidden" name="num_tires" value="<?php echo $num_tries; ?>">
        <button type="submit" name="submit" value="submit">submit</button>
    </form>

    <?php
    /* The action $_SERVER['PHP_SELF'] is  global variable represents the name of the 
     current script in other words, the action tells the script reload itself. */
    
    $num_to_guess=42;
    //now we want to track no of tries(attempt 2)
    $num_tries=(isset($_POST['guess']))?$num_tries+1 : 1;
    if(!isset($_POST['guess']))
    {
        $message="welcome to the guessing machine"; // when the script is first loaded
    }
    elseif(!is_numeric($_POST['guess']))
    {
        $message="I dont understand your responce";
    }
    elseif($num_to_guess==$_POST['guess'])
    {
        $message="you guessed it right";
    }
    else{
        $message="f****Wrong***";
    }
    echo $message;
/* isset() checks that array contains any thing or not returns
true if array is empty and false if array is not empty */

// As a thumb rule we can write php file on the top an followed
// by html
 

//redirecting forms


    ?>
</body>
</html>