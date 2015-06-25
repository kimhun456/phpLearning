<?php
	// different between require and include are warning and fatal
	// require is more strict than include
	require  'main.php';
	include_once 'main.php';

	echo welcome();		
?>
