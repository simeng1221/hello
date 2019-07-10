<?php
//快速排序
// $result = quickSort([25,3,1,7,9,6,33,44,22,12,55,11,4,8]);
// echo "<pre>";
// var_dump($result);
// function quickSort($arr){
//     if(count($arr)<=1){
//         return $arr;
//     }
// //找一个基准值
//     $base = $arr[0];

//     $min = [];
//     $max = [];  
//     for($i=1;$i<count($arr);$i++){
//         if($arr[$i]<=$base){
//             $min[]=$arr[$i];
//         }else{
//             $max[]=$arr[$i];
//         }
//     }
//     $left = quickSort($min);
//     $right = quickSort($max);
//     return array_merge($left,[$base],$right);

// }
// 冒泡
// $arr = array('25','3','1','7','9','6');
// function maopao($arr){
//     for($i=0;$i<count($arr);$i++){
//         $data='';
//         for($j=$i;$j<count($arr)-1;$j++){
//             if($arr[$i] >$arr[$j+1] ){
//                 $data = $arr[$i];
//                 $arr[$i]=$arr[$j+1];
//                 $arr[$j+1] = $data;
//             }
//         }
//     }
//     return $arr;
// }
// echo "<pre>";
// var_dump(maopao($arr));


// function yhs($n){
//     $arr=[];
//     for($i=1;$i<=$n;$i++){
//         for($j=1;$j<=$i;$j++){
//             if($j==1||$j==$i){
//                  $arr[$i][$j]=1;
//             }else{
//                  $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
//             }
           
//         }
      
//     }
//     return $arr;
// }
// echo "<pre>";
// var_dump(yhs(10));
// exit;
$n='';
function JumpFloor1(int n) {
        if(n<1){
            return 0;
        }
        if(n==1){
            return 1;
        }
        if(n==2){
            return 2;
        }
        return JumpFloor1(n-1)+JumpFloor1(n-2);

    }
    

?>