<?php  
echo "<pre>";
echo Combine();
function Combine(){
	$A=[1,3,5,10];
	$B=[2,4,6,9];
	$arr = array_merge($A,$B);
	$a=count($arr);
	for ($j=0; $j < $a-$j ; $j++) { 
		for ($i=0; $i < $a-1 ; $i++) { 
			if($arr[$i] >$arr[$i+1]){
				$b = $arr[$i];
				$arr[$i]=$arr[$i+1];
				$arr[$i+1]=$b;
			}
		}
	}
	print_r($arr);
}
?>