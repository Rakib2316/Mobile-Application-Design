<?php
//Anagram Check
$str1 = "listen";
$str2 = "silent";

$len1=0;
$len2=0;

while(isset($str1[$len1])){
    $len1++;

}
while(isset($str2[$len2])){
    $len2++;
}

if($len1 !=$len2)
{
    echo "Not Anagram";
    exit;
}

for($i=0; $i<$len1; $i++)
{
    $found=false;

    for($j=0; $j<$len2; $j++)
    {
        if($str1[$i]==$str2[$j])
        {
            $str2[$j] = "0";
            $found =true;
            break;
        }
        
    }

    if(!$found)
        {
            echo "Not Anagrams";
            exit;
        }
}

echo "Anagram";



?>