<?php
 	include('config.php');
?>

<?php
	
	if(isset($_POST['post_edit'])){
	$task = $_POST['task'];
	$id = @$_GET['id'];

	try{
	if(empty($_POST['task'])){
	throw new Exception('Filed can not be empty');
	}
	$statement = $db->prepare("UPDATE post SET task=? WHERE id=?");
	$statement->execute(array($task,$id));
	header('location: index.php');
	}
	catch(Exception $e){
	$error_message = $e->getmessage();
	}
	}

?>


<?php

   	$id = $_GET['id'];
   	$query = $db->prepare("SELECT * FROM post WHERE id=?");
   	$query->execute(array($id));
    $result = $query->fetchAll (PDO::FETCH_ASSOC);

   	foreach ($result as $row){
   	$old_task= $row['task'];
    }

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ToDoX</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css?x=<?php echo uniqid();?>" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
		
	</nav>
	
	
		

			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-2 col-md-offset-5">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>ToDoX</div>
					<div class="panel-footer">
								<?php
									if (isset($error_message)) {
									echo "<span style='color:red'>{$error_message}</span>";
									}
								?>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="input-group">
							<input value="<?php echo @$old_task;?>" class="form-control" name="task" id="">
							<span class="input-group-btn">
								<button type="submit" name="post_edit" class="btn btn-primary btn-md" id="btn-todo">Edit</button>
							</span>
						</div>
					</div>
					</form>
					
				</div>
								
			</div>

		
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
</body>

</html>
