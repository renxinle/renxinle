<?php
$dir=__DIR__;

echo $dir;echo "<br>";
three($dir);
function three($dir){
  if(is_dir($dir)){
  	if($dh=opendir($dir)){
  		while (($file=readdir($dh))!==false) {
  			if($file=='.'||$file==".."){

  			}
  			else{
  				echo $dir.':';
  				echo   "$file"."<br>";

  			}
  			

  		}
  		closedir($dh);
  	}
  }
}
?>