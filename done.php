<?php


ob_start();
	session_start();

	if ($_SESSION['name'] != "ami") {
			header('location: login.php');
		}else{
			include('config.php');
	}

	$id = @$_GET['task'];
	$tas = @$_GET['tas'];

	if($tas == 0){
	$statement = $db->prepare("UPDATE post SET cek=1 where id={$id}");
	$statement->execute();
	}else{
		$statement = $db->prepare("UPDATE post SET cek=0 where id={$id}");
		$statement->execute();
	}
	header('location:index.php');

?>

	