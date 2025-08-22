
<?php
//Reverse String
$str = "Hello world";
$reverse = "";

$len = 0;

while(isset($str[$len])){
    $len++;
}

for($i = $len-1; $i>=0; $i--)
{
    $reverse .= $str[$i];
}

echo "Original String: $str<br>";
echo "Reversed String: $reverse";


?>