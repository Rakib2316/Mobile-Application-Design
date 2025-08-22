<?php
//Palindrome check 
$str = "madam";
$new_str= "";
$len=0;

while(isset($str[$len]))
{
    $len++;

}

$i=0;
for($i=$len-1; $i>=0; $i--)
{
    $new_str = $new_str . $str[$i];
}

if($str==$new_str)
{
    echo "Palindrome";
}
else{
    echo "Not palindrome";
}

?>