<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings time and date</title>
</head>
<body>
    <?php
        // normal string just like c
        // printf() works same here in php
        // sprintf() sorts the passed string
        //tokenizeing the strings
        $test="http://www.googole.com/search?";
        $test .="hl=en&ie=UTF-8&q=php+development+books&btnG=Google+Search";
        $sep="?&"; //split according to the first found
        $word=strtok($test,$sep);
        while (is_string($word)){
            if($word){
                echo $word. "<br>";
            }
            $word=strtok($sep);
        }
        // some more string predefined functions can be explored

        #Date and Time functions
        
        echo time(); // it return unix epoch so to convert we use getdate()
        echo "<br>";
        $date_array= getdate(); //no argument passed so todays date will be used
        //date_array is associative array hence this formate is used
        foreach ($date_array as $key=>$val){
            echo "$key=$val<br>";
        }
        echo $date_array['year'] . "<br>";
        echo $date_array['month'] . "<br>";
        echo $date_array['weekday'] . "<br>";
        echo $date_array['yday'] . "<br>";
        echo $date_array['mon'] . "<br>";
        echo $date_array['wday'] . "<br>";
        echo $date_array['mday'] . "<br>";
        echo $date_array['hours'] . "<br>";
        echo $date_array['minutes'] . "<br>";
        echo $date_array['seconds'] . "<br>";

        // date() function returns a formatted string that represents a date
        $time=time();
        echo date("d/m/y ",$time);

        //costomized date with mktime()
        $ts=mktime(21,34,0,1,17,2023);
        echo date("d/m/y",$ts)

        //checking a valid date
       // $check=checkdate(4,4,1016);
       // echo $check;
    

?>
</body>
</html>