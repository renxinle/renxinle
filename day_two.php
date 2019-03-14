<?php
echo "下面的都是水仙花数:<br>";
flower(100,999);

function flower($min,$max){
     for ($i=$min; $i < $max; $i++) { 
     $h=floor($i/100);
     $t=floor($i/10%10);
     $o=$i%10;
     if($h*$h*$h+$t*$t*$t+$o*$o*$o==$i){
            echo $i;echo '<br>';
     }
     }

}

?>