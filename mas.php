<?php
function squares($start,$stop){
	if ($start<$stop){
		for ($i = $start;$i<=$stop;$i++){
			yield $i => $i*$i;
		}
	}
	else {
		for ($i = $stop;$i<=$start;$i++){
			yield $i => $i*$i;
		}	
	}
};

$tmp = squares(5,15);
print_r($tmp);
echo "<br />";
foreach (squares(5,15) as $n=>$square){
	echo $n;
	echo "<br />";
	echo $square;
	
}
?>