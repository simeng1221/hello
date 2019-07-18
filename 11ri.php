<?php  
$str = "student. a am I";
function ReverseSentence($str){
	$arr = explode(" ", $str);
	krsort($arr);
	$arr = implode(" ", $arr);
	return $arr;
}
print_r(ReverseSentence($str));




?>