<?php
function sq($start,$stop){
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

print_r(sq(5,15));
var_dump(sq(5,15));


?>