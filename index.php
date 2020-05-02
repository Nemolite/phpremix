<?php
// This is repetition
 foreach ([1,2,3,4] as $mNum){
	 $isItNum = gettype($mNum);
	 print "Is the $isItNum = $mNum";
	 if (is_numeric($mNum)){
		 print "yes";
	 } else {
		 print "no";
	 }
		 echo "<br />";
 }
	 
?>