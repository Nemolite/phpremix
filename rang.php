<?php

function str_rnd($lenght = 32, $shar = '0123456789qwertyuiop[]asdfghjklzxcvbnm'){
	if (!is_int($lenght)|| $lenght < 0) {
		return false;
	}
	
	$shar_len  = strlen($shar)- 1;
	$string = '';
	for ($i=$lenght; $i > 0; $i-- ){
		$string .= $shar[mt_rand(0,$shar_len)];
	}
		return $string;
}

$srt1 = str_rnd();
print $srt1;
?>