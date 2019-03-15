<?php
//递归
$num=6;
echo three($num);
function three($num){
   if($num<=2){
   	return 1;
   }
   else{
   	return three($num-1)+three($num-2);
   }
}
for ($i=1; $i <= $num; $i++) { 
	echo "<br>";echo three($i);
}
//非递归
// $num=6;
for ($i=1; $i <=$num ; $i++) { 
	if($i<=2){
		echo 1;
		$a=$b=1;
	}
	else{
		$c=$a+$b;
		echo $c;
		$a=$b;
		$b=$c;
	}
}
?>