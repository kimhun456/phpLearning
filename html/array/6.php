associative array

<?php
	$grades = array('hyun' =>10, 'jae'=> 6);
	var_dump($grades);
	echo "<br ?>";


	$grades = [];
	$grades['hyun']= 10;
	$grades['jae']=20;

	var_dump($grades);


	echo "<br />".$grades['hyun'];
?>