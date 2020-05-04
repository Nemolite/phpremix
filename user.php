<?php


$str1 = 'g25092011@mail.ru';
$tmp1 = strpos($str1,'@');

print $tmp1;
echo "<br />";
if ( strpos($str1,'@') === false ){
	print "yes";
} else {
	print "no";
}

echo "<br />";
$str2 = 'Hello, ывапб , World';
$tmp2 = substr($str2,6,12);
echo $tmp2;

echo "<br />";
$str3 = "1234 4556 7865 7812";
print $str3;
echo "<br />";
$tmp4 = substr_replace($str3,'*',6,11);
print $tmp4; 
?>