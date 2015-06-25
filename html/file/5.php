<?php
	$homepage = file_get_contents("http://php.net/manual/en/function.file-get-contents.php");
	file_get_contents($homepage);
	echo $homepage;
?>