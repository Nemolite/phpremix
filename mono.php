<?php

printf('<a href="%s">%s</a>',"yandex.ru","Ссылка");

echo "<br />";
$s1 = "I am progammer";
echo $s1;
$res1 = explode(" ",$s1);
echo "<br />";
echo $res1;
echo "<br />";
for($i=0;$i<strlen($s1);$i++){
	print $res1[$i];
};


?>