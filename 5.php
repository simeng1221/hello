<?php 

$arr = [1,9,5,36,8,4,6,2,6,63,12];

function get($arr){
    $ou = [];
    $qi = [];
    for ($i=0; $i < count($arr) ; $i++) { 
        if ($arr[$i] % 2 == 0) {
            $ou[] = $arr[$i];
        }else{
            $qi[] = $arr[$i];
        }
    }
    return array_merge($qi,$ou);

}


var_dump(get($arr));

?>