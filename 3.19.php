<?php

echo str(100,1300);
function str($min,$max){
	$str='';
for ($i=$min; $i <=$max ; $i++) { 
	$str.=$i;
}
return substr_count($str,1);
}

?>