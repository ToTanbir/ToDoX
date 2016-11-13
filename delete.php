<?php
	include('config.php');
?>
<?php
	if (isset($_REQUEST['tas_delete'])){
	$id = $_REQUEST['tas_delete'];
	$query = $db->prepare("DELETE FROM post WHERE id=?");
	$query->execute(array($id));

	header('Location: index.php');
	}
?>