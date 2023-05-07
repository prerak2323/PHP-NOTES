<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
</head>
<body>
    <p>Welcome, <strong><?php echo $_POST['user']; ?></strong></p>
    <p> your message is:
        <strong><?php echo $_POST['message']; ?> </strong></p>
        <! the php code accesses two variables: $_POST['user'] and $_POST['message']

        <?php 
        if(!empty($_POST['products'])) {
            echo "<ul>";
            foreach($_POST['products'] as $value)
            {
                echo "<li>$value</li>";
            }
            echo "<ul>";
        }
        else {
            echo "none";
        }
/* to use checkboxes we have to use a name that is ending with [] brackets as this typte 
of name php treats as a array hence with the help of foreach loop we extract the values entered 
through checkbox same techneque is used with <select> which allows multiple selection.
note: as long as the name you choose ends with [] brackets, PHP compiles the user input for this 
field into an array*/ 
        ?>

</body>
</html>