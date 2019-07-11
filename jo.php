<?php  
$arr=[1,2,3,4,5,6];
function jo($arr){
	$j=[];
	$o=[];
	for($i=0;$i<count($arr);$i++){
		if($arr[$i]%2==0){
			$o[]=$arr[$i];
		}else{
			$j[]=$arr[$i];
		}
	}
	return array_merge($j,$o);
}
echo "<pre>";
var_dump(jo($arr));




?>