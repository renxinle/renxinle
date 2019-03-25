<?php
$arr=[1,2,3,4];
echo one($arr);
function one($arr){
	//总数量
	$count=0;
	//计算的for循环
   for ($i=1; $i <= 4; $i++) { 
   	 for ($j=1; $j <=4 ; $j++) { 
   	 	for ($k=1; $k <=4 ; $k++) { 
   	 		if($i==$j||$i==$k||$j==$k){
   	 			
   	 		}else{
           echo $i*100+$j*10+$k;echo "<br>";
           $count++;

   	 		}
   	 	}
   	 }
   }
   echo "这是总数量".$count;
}

?>