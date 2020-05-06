<?php

$fp = fopen('test.txt','r',true) or die ('не могу открыть файл');
while ($s = fgets($fp,1024)){
	$fields[1] = substr($s,0,25);
	$fields[2] = substr($s,25,15);
	$fields[3] = substr($s,40,4);
	$fields = array_map('rtrim', $fields);
	/*process_fielids($fields);*/
	print_r($fields );
}
fclose($fp) or die('Не могу закрыть файл');



?>