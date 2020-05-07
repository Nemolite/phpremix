<p>Введите число А </p>
<form action="exam.php" method="POST"> 
<input type="number" name="num"/>
<input type="submit" value=" найти сумму ряда ">
</form>
<?php
$a = $_POST['num']; 
$sum = 0;
$sum1 = 0;
$n = 1;
if ($a>0) {
	while ($sum<$a){
		$sum1 = $sum;
		$sum=$sum1 + (1/$n);
		$n++;
	}
}
echo $sum1;
?>