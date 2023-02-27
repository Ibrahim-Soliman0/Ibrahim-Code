<?php
//using a fun saved in a file and using it in another file
//getting the average of an array
function avg ($x)
{
    $s = 0;
    for($i = 0; $i < count($x); $i++)
    { 
        $s += $x[$i];
    }
    $a = $s / count($x);
    return $a;
}
