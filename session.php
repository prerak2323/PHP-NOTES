<?php
/* A session is a way to store information (in variables) to be used across multiple pages.

Unlike a cookie, the information is not stored on the users computer

As HTTP address does no maintain state hence session variable store users info last untill the user
classes the browser */

// session start
session_start();
/*you need to call the
session_start() function in each script.*/
// users session id
echo "your session id is". session_id();
//same  id is assigned every time because cookies are enabled
//working with session variables
$_SESSION['product1']="sonic screwdriver";
$_SESSION['product2']="hal";
echo "registered";
?>
<?php

echo "<hr>";
echo $_SESSION['product1'];
echo "<br>";
echo $_SESSION['product2'];
session_destroy();
?>