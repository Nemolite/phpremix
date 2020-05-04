<?php
  $sales = array(
          array('text1','2005-01-01','2006-04-04',12.3),
		  array('text2','2005-01-01','2006-04-04',14.3),
		  array('text4','2005-01-01','2006-04-04',16.3),
		  array('text5','2005-01-01','2006-04-04',13.3),
  );
  
  $filename = './sales.csv';
  $fh = fopen($filename,'w') or die("Не могу открыть файл $filename");
  foreach ($sales as $sales_line) {
	  if (fputcsv($fh,$sales_line) === false){
		  die("Не могу записать в файл");
	  }
  }
  fclose($fh) or die("Не могу закрыть файл");

?>