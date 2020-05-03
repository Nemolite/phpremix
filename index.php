<?php
// This is repetition
 foreach ([1,2,'3',4] as $mNum){
	 $isItNum = gettype($mNum);
	 print "Is the $isItNum = $mNum";
	 if (is_numeric($mNum)){
		 print "yes";
	 } else {
		 print "no";
	 }
		 echo "<br />";
 }
	// no2

$delta = 0.00001;
$a = 1.00000001;
$b = 1.00000000	;
if (abs($a-$b)<$delta) {
	print "$a and $b are equal enough";
}

$temp = 2.45321;

echo "<br />";
printf("===  %s",round($temp)); 
echo "<br />";
printf("===  %s",ceil($temp)); 
echo "<br />";
printf("===  %s",floor($temp)); 

?>