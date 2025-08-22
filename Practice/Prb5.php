<?php
//1.	Sum of Array Elements
$arr = [2,3,4,1,10,8];
$len=0;
$sum=0;
foreach($arr as $x)
{
    $sum = $sum+ $x;
    $len++;
}

echo "Sum = ".$sum."<br>";
echo "Length = ".$len."<br>";
echo count($arr),"<br>";
echo sizeof($arr),"<br>";
echo "<br>";
echo "<br>";

//2.	Maximum and Minimum

$max= $arr[0];

for($i=1; $i<$len; $i++)
{
    if($arr[$i]>$max)
    {
        $max = $arr[$i];
    }
}

echo "Maximum: ".$max."<br>";

$min= $arr[0];

for($i=1; $i<$len; $i++)
{
    if($arr[$i]<$min)
    {
        $min = $arr[$i];
    }
}

echo "Minimum: ".$min."<br>";

echo "<br>";
echo "<br>";

//3.	Array Reverse

$reverse= [];
$j=0;
for($i=$len-1; $i>=0; $i--)
{
    
    $reverse[$j] = $arr[$i];
    $j++;
}
echo "Reverse Array: ";
for($i=0; $i<$len; $i++){
    echo $reverse[$i], ",";
}

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr1[] += $arr2;
print_r($arr1);



?>