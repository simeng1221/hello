<?php  
echo NumberOf1();
function NumberOf1(){
	$n = 10;
	$res = decbin($n);
	echo substr_count($res, 1);
}




?>