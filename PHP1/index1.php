<?php
$text = "I Love Taha Irshaid";
$strlen = strlen($text);
echo $strlen;
// $strlen يقوم بعد اخرف البيانات المخزنة لدى اسم المتغير
$taha = "<br>";
echo $taha ; 
$taxt_count_word = str_word_count($text);
echo $taxt_count_word ;
echo $taha ; 
// $taxt_count_word يعمل العنصر على عد الكلمات الموجودة داخل المتغير
$taxt_strrev = strrev($text);
echo $taxt_strrev ; 
//$taxt_strrev يقوم العنصر بعكس الأحرف
echo $taha ; 

$text_strops = strpos($text,"Irshaid");
echo $text_strops;
// strpos يعمل العنصر على بحث في الكلمة المراد ايجادها لدى النص
echo $taha ; 

$text_replace = str_replace('Taha Irshaid', 'PHP' ,$text); 
echo $text_replace ; 
// من خلال هذا العنصر يمكنك استبدال الكلمة او الجملة من بيانات المخزنة
echo $taha ;

$text_trim = trim($text);
echo $text_trim;
//trim هذا العنصر يقوم بحذف الفراغات في البداية والنهاية 
?>