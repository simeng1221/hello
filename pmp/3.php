<?php

function qw($n){
	if($n==1) return 1;
	if($n==2) return 2;
	return qw($n-1)+qw($n-2);
}
echo qw(5);


?>