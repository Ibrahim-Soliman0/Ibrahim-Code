<?php
 $x = 12;
echo $x;
echo "<br>";
$x = "hi";
echo $x;

echo "<table border = '1' width = '50%'>";
echo "<th> x </th> <th> y </th>";
echo "<tr><td> 2 </td> <td> 3 </td></tr>";
echo "<tr><td> 7 </td> <td> 5 </td></tr>";
echo "</table>";

$s1 = " One ";
echo strlen($s1)."<br>";
$s2 = trim($s1);
echo strlen($s2)."<br>";
//sum of the array elements
$z = array(-1,2,5);
$s = 0;
for($i = 0; $i < count($z); $i++)
{ 
    $s += $z[$i];
}
echo $s;
echo "<br>";
//the number of strings in each element in the array
$z = array("C++","Java","Welcome to PHP");
for($i = 0; $i < count($z); $i++)
{
     echo strlen($z[$i])."<br>";
}
//makes an array with the following (index of the starting element, the size of the array , the filling value of the array elements)
$x = array_fill(0, 5 , 0);
//stores a random number for 10 to 100
for($i = 0; $i < count($x); $i++)
{
    $x[$i] = mt_rand(10,100);
    echo $x[$i]."<br>";
}
//constant
const PI = 22.0/7;
echo PI."<br>";
const MESSAGE = "Welcome";
echo MESSAGE;
//makeing a php function (method)
function maxvalue ($a , $b)
{
    if($a >= $b) 
    {
     return $a;   
    }
    else
    {
        return $b;   
    }
}
//how to call the function
echo maxvalue(30,50)."<br>";
$x = maxvalue(40,25);
echo $x;
?>