<?php


	include ('config.php');
	?>

<?php
		if (!isset($_GET['view_id']) || $_GET['view_id'] == null) {
			echo "<script>window.location = 'message.php';</script>";
		}else{
			$id = $_GET['view_id'];
		
	?>
