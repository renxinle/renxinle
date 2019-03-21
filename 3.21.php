<?php
$n=6;
$m=4;$sum=$sum1=0;
for ($i=0; $i <=$m ; $i++) { 
	$sum=$sum+$i;
}
for ($i=0; $i <=$n ; $i++) { 
	$sum1=$sum1+$i;
}
echo $sum;
echo $sum1;
$num=$sum1%$sum;
echo $num;


?>