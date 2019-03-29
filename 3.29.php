<?php
// $str="ABCDEFabcdefgabcdefABCDEFG";
$str="aa";
echo one($str);

function one($str){
	$len=strlen($str);
	//先看是否符合规范
	if($len<0&&$len>10000){
		return false;
	}
	//看看第一次出现的位置
	for ($i=0; $i < $len; $i++) { 
		$temp=substr_count($str, $str[$i]);
		if($temp==1){
			return $i+1;
		}

	}
	//如果没有就返回-1
	return -1;
}

?>