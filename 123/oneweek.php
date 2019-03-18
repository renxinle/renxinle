<?php
// 第一题（1）
function one($max){
	if($max==1){
		return 1;
	}else{
		return one($max-1)+$max;
	}
}
// echo one(100);
// 第一题（2）
echo one1(1,100);
function one1($min,$max){
	$arr=range($min,$max);
return array_sum($arr);
}

// 第一题（3）
$num=100;$sum=0;
for ($i=1; $i <=$num ; $i++) { 
	if($i==1){
       $sum=1;
	}else{
	 $sum=$i+$sum;
	}
}
// echo $sum;
// 第二题（1）
function two($max){
	if($max==1){
		return 1;
	}else{
		return two($max-1)*$max;
	}
}
// echo two(5);
// 第二题（2）
$num=5;$sum=0;
for ($i=1; $i <=$num ; $i++) { 
	if($i==1){
       $sum=1;
	}else{
	 $sum=$i*$sum;
	}
}
// echo $sum;
// 第三题
// echo str("abba");
function str($str){
	
// echo $str;
$strs=strrev($str);
if($str==$strs){
	// echo "这是回文字符串";
}else{
	// echo "这不是回文字符串";
}
}

?>