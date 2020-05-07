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
	echo "<br />";

function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
	echo "<br />";
    echo "$value\n";
}

?>