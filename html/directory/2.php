<?php
	$dir ='./';
	$file1 = scandir($dir);

	//정렬순서가 반대로 된다. 
	$file2 = scandir($dir,1);
	
	print_r($file1);
	print_r($file2);

?>