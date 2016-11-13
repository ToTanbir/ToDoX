<?php 
  include('config.php');
?>
<?php 	
	if (isset($_POST['post_form'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		
		// auto Increment Student ID
      $statement = $db->prepare("show table status like 'reg'");
      $statement->execute();
      $result = $statement->fetchAll();
      foreach ($result as $row) 
      $member_id = $row[10].mt_rand();
	
	try{
		
		$md5password = md5($pass);
		$statement = $db->prepare("insert into reg (member_id,name,email,password) values (?,?,?,?)");
        $statement->execute(array($member_id,$name,$email,$md5password));
		
		$sucess = "Register Susscefully";
	}
	catch(Exception $e){
			$error_message = $e->getmessage();
			}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link rel="stylesheet" type="text/css" href="../css/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-2 col-md-offset-5">
			<div class="login-panel panel panel-default">
				
				
				<div class="panel-body">
				<?php
				if (isset($error_message)) {
				echo "<span style='color:red'>{$error_message}</span>";
				}
				if (isset($sucess)) {
				echo "<span style='color:green'>{$sucess}</span>";	
				}
				?>
					<form class="login-form" role="form" action="" method="post">
									<p><i class="pe-7s-lock"></i></p>
									
						<fieldset>
							<div class="form-group">
								<input class="form-control" required name="name" placeholder="Name"  type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" required name="email" placeholder="Email"  type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" required name="password" placeholder="Password"  type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button class="btn btn-primary btn-lg btn-block" name="post_form" type="submit">Register</button>
							<a href="login.php">Login</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
