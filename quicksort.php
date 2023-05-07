<?php
    function quickSort($array)
    {
        if(count($array)<2)
        {
            return $array;
        }
        $pivot=$array[0];
        $left=$right=array();
        for($i=1;$i<count($array);$i++)
        {
            if($array[$i]<$pivot)
            {
                $left[]=$array[$i];
            }
            else {
                $right[]=$array[$i];
            }
        }
        return array_merge(quickSort($left),array($pivot),quickSort($right));

    }
    $unsortedArray = [5, 2, 6, 4, 1];
    $sortedArray = quickSort($unsortedArray);
    for($j=0;$j<count($sortedArray);$j++)
    {
        echo $sortedArray[$j]."   ";
    }


?>