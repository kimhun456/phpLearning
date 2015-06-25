<?php
	$student = ["hyun", "min","jang"];


	// count use for length of $student 
	for($i=0; $i<count($student);$i++){
		// ucfirst makes the First elements of String CAPITAL CHARACTER
		print ucfirst($student[$i]);
	}

	function get_members(){
		return ["hyun", "min","jang"];
	}
?>
