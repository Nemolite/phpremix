<p>Введите число А </p>
<form action="" method="POST"> 
<input type="number" name="num" min="2" />
</form>
<?php
$a = $_POST['num'];
$sum = 1;
$n=2;
do {
  $sum = $sum+(1/$n);
  $n=$n+1;
}
while ($sum < $a);
echo $sum;

?>