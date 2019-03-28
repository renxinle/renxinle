<?php
$arr=[1,2,3,4,5,6];
echo one($arr,4);
function one($arr,$num){
	$data=0;$arrs=array();
   for ($i=0; $i <count($arr) ; $i++) { 
       for ($j=0; $j <count($arr) ; $j++) { 
       	if($arr[$i]+$arr[$j]==$num){
       		$data=($arr[$i]*$arr[$j]);
       		$arrs[]=$data;
       		// sort($data);

       	}
       }
   }
   echo "<pre>";
       		
   sort($arrs);
   return $arrs[0];
}

?>