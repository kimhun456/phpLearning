<?php
	
	$li = ['a','b','c','d','e'];

	array_push($li, "f");

	echo "push the array "."<br />";

	var_dump($li);

	echo "<br / >";

	array_unshift($li, "z");

	echo "unshift the array "."<br />";

	var_dump($li);

	echo "<br / >";

	array_shift($li);

	echo "shift the array "."<br />";

	var_dump($li);
	echo "<br / >";
	
	array_pop($li);

	echo "pop the array "."<br />";

	var_dump($li);
	echo "<br / >";
?>