<?php  
echo Find();

function Find(){
	 $target = 20 ;
     $array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
     if(in_array($target, $array)){
     		echo 'true';
     }else{
     	echo 'false';
     }
}



?>