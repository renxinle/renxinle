<?php
function ($a=1,$b=0){
	while ($b!=0){
		$t=$a^$b;
		$b=($a&$b);

	}
	return $t;
}

?>