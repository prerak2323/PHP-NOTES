<?php
 
function selectionsort($array)
{
    for($i=0;$i<count($array)-1;$i++)
    {
        $minindex=$i;

        for($j=$i+1;$j<count($array);$j++)
        {
            if($array[$j]<$array[$minindex])
            {
                $minindex=$j;
            }
        }
        if($minindex!=$i)
        {
            $temp=$array[$i];
            $array[$i]=$array[$minindex];
            $array[$minindex]=$temp;
        }
    }
    return $array;
}

// Example usage:
$unsortedArray = [5, 2, 9, 1, 7];
$sortedArray = selectionSort($unsortedArray);

for($i=0;$i<count($sortedArray);$i++)
{
    echo $sortedArray[$i];
}


?>
