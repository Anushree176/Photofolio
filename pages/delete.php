<?php
	require_once('dbConfig.php');
	$id = $_GET['id'];
	
	
	
	$sql = "DELETE FROM image WHERE id = $id"; 
	
	if (mysqli_query($db, $sql)) {
		header('Location: template_edit.php'); //If book.php is your main page where you list your all records
		exit;
	} else {
		echo "Error deleting record";
	}
?> 