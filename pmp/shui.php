<?php
$m = isset($_GET['m'])?$_GET['m']:1;
$n = isset($_GET['n'])?$_GET['n']:1;
if($n<$m){
    $s = $m;
    $m=$n;
    $n=$s;
}
$data = range($n,$m);

foreach ($data as $k=>$n){
    $res = flower($n);
    if($res){
        echo $n."<br>";
    }
    if($n){
        return true;
    }else{
        return false;
    }
}





