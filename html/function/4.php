<?php
	
	$test =1  ; 


	function add_argument($arg1=3,$arg2=5){
		//local variable arg1,arg2
		global $test;
		echo $test;
		return $arg1 + $arg2."<br />";
	}

	echo add_argument(1,4);
	echo add_argument();
?>
