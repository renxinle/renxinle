<?php
function one($num){
	$strs=0;$str=0;
   for ($i=0;; $i++) { 
   	$str=$num%2;
   	$num=floor($num/2);
   	$strs+=$str;
   	if($num==0){
   		
   		return $strs;
   	} 
   	if($num==1){
   		$strs=$strs+1;
   		return $strs;
   	}
   }	
   // return $strs;

}
echo one(2);
?>