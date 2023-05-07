<?php
function insertionsort($array)
{
    for($i=1;$i<count($array);$i++)
    {
        $key=$array[$i];
        $j=$i-1;


        while($j>=0 && $array[$j]>$key)
        {
            $array[$j+1]=$array[$j];
            $j=$j-1;
        }
        $array[$j+1]=$key;
    }
    return $array;
}

// Example usage:
$unsortedArray = [5, 2, 9, 1, 7];
$sortedArray = insertionSort($unsortedArray);

for($i=0;$i<count($sortedArray);$i++)
{
    echo $sortedArray[$i]."   ";
}
?>
