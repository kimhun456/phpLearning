<?php

		$a = 10;
		function get_argument($arg){
			return $arg;
		}

		print get_argument("1234");

		print get_argument(4);

		echo "<br />";

		function add_argument($arg1=3,$arg2=5){

			return $arg1 + $arg2;
		}

		echo add_argument(1,4);
		echo add_argument();
?>
