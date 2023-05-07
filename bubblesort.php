<?php
function bubblesort($array)
{
    $n=count($array);
    for($i=0;$i<$n-1;$i++)
    {
        for($j=0;$j<$n-$i-1;$j++)
        {
            if($array[$j]>$array[$j+1])
            {
                $temp=$array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
        }
    }
    return $array;
}

// Example usage:
$unsortedArray = [5, 2, 9, 1, 7];
$sortedArray = bubbleSort($unsortedArray);

for($i=0;$i<count($sortedArray);$i++)
{
    echo $sortedArray[$i]."      ";
}


?>