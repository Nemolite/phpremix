<?php
function show($display){
	echo "<pre>";
    print_r($display);
    echo "</pre>";
}



printf('<a href="%s">%s</a>',"yandex.ru","Ссылка");

echo "<br />";
$s1 = "I am progammer";
echo $s1;
$res1 = explode(" ",$s1);
echo $s1;
echo "<br />";
echo $res1;
echo "<br />";


print_r($res1);
$rev_res2 = array_reverse($res1);
echo "<br />";
echo "<pre>";
print_r($rev_res2 );
echo "</pre>";

show($rev_res2);

$w = implode($rev_res2);
show($w);
?>