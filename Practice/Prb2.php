<?php
//Vowel consonant number 
 $str = "hello";
 $vowel=0;
 $consonant=0;

 
 $i=0;
 while(isset($str[$i])){
    if($str[$i]=='a' or$str[$i]=='e' or $str[$i]=='i' or $str[$i]=='o' or $str[$i]=='u'
      or $str[$i]=='A' or$str[$i]=='E' or $str[$i]=='I' or $str[$i]=='O' or $str[$i]=='U'
    ){
        $vowel++;
    }
    else{
        $consonant++;
    }
    $i++;
 }

 echo "Vowel: $vowel and Consonant: $consonant";
?>