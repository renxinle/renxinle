<?php
$aPath="/a/b/d/d/test.php12";
$bPath="/a/b/c/d/test.php";
echo four($aPath,$bPath);
function four($aPath,$bPath){
	//先进行比较看看那个短
    $count=strlen($aPath)>strlen($bPath)?strlen($bPath):strlen($aPath);
    // echo $count;
    $str='';
    // echo $bPath[0];
    for ($i=0; $i < $count; $i++) { 
    	if($aPath[$i]==$bPath[$i]){
    		$str.=$aPath[$i];
    	}else{
    		break;
    	}
    }

    // $strs=substr(strrchr($str, "/"), -(strrpos($str,"/")));
    // return $str;2
    // $str=sub
return $str;
}
?>