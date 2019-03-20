<?php

      $counts=240;
	$arr=[];
   for ($i=1;;$i++) { 
   	   if(a($i)==1){
         $arr[]=$i;
   	   }
   	   if(count($arr)==$counts){
   	   	break;
   	   }
   }
   print_r($arr[$counts-1]) ;

  // $num=12;
 // a($num);
function a($num){
	if($num==1){
		return 1;
	}
	while($num%2==0){
		$num=$num/2;
	}
	while($num%3==0){
		$num=$num/3;
	}
	while($num%5==0){
		$num=$num/5;
	}
	return $num;
}
?>