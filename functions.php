<?php

function filter($connect,$data) {
	$data = trim(htmlentities(strip_tags($data)));
	
	if (get_magic_quotes_gpc())
		$data = stripslashes($data);
	
	$data = mysqli_real_escape_string($connect,$data);
	
	return $data;
}

?>