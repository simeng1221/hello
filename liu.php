<?php  
// calFn(1,13);
calFn(100,1300);
function calFn($n,$m){
	$ci = range($n, $m); //用range组成数组
	//用join($ci)转成字符串，然后用substr_count函数查出1在这个字符串中出现的次数
	echo substr_count(join($ci), '1');
}



?>