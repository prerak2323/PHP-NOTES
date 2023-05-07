
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Array using PHP</h1>
    <form action="practice.php" method="post">
    Enter size of array in 2 dimensions <input type="number" name="size">
    </form>
<?php

$size=$_POST["size"];
echo $size;

?>
<?php
        $arr=array(100);
        for($i=0;$i<($size*$size);$i++)
        {
            $arr[$i]=rand(0,10);
            
        }
?>
<! converting array to 2 dimensionl>
<?php
    $row=$size;
    $col=$size;
    $count=0;
    for($k=0;$k<$size;$k++)
    {
        for($j=0;$j<$size;$j++)
        {
            echo $arr[$count];
            $count++;
        }
        echo "<br>";
    }

    function myname()
    {
        echo "Prerak Gupta";
    }

    myname();
  

?>

<p>
    Arrays in pHp
</p>

<?php
    $rainbow=array("red","orange","yellow");
    echo $rainbow[1];

    #associative arrays 
    /* arrays with frormate key=value
    just like structure in c langauge
    similar to dictonary in python */
    $character=array
    (
        "name"=>"Prerak Gupta",
        "occupation"=>"bussiness",
        "age"=>"20",
        "education"=>"B.Tech(IIITN)"
    );

    echo $character['occupation'];
        $count=count($character);
        echo $count ."count function";
        sizeof($character);
        #function rewinds the pointer to the begening 
        #of an array
        reset($character);
        //pushes one or more element in array returns the last element of the array
        array_push($character,"element 1","element 2");
        //pops the last element of the array
        $last_element=array_pop($character);
        //adds element to the begening
        array_unshift($character,"element 1","element 2");
        //removes first element of array and returns it
        $first_element = array_shift($character);
        //combines tow or more arrays
        $newarray=array_merge($character,$character);
        //returns key of all elements
        $keys=array_keys($character);
        //returns all the value associated with the key in array
        $valuesarray=array_values($character);
        //randomize the given elements
        shuffle($character);


?>


</body>
</html>
