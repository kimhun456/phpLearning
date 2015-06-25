<?php

	require_once 'greeting_ko.php';
	require_once 'greeting_en.php';

	echo language\en\welcome();
	echo language\ko\welcome();

?>