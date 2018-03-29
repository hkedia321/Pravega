<?php
session_start();
$title="Pravega Racing - Admin Space";
include_once('includes/head.php');
global $error;

global $adminPassword;
if(!isset($error))
	$error="";
if(isset($_SESSION['user_auth']) and $_SESSION['user_auth']=="admin")
{
	header("Location:choose.php");
	die();
}
if(isset($_POST['submit'])){
	if($_POST['password']=='Pravegaadminpassword#01')
	{
		$_SESSION['user_auth']="admin";
		header("Location:choose.php");
	}
	else
	{
		$error="Wrong username/password.";
	}
}

?>
<style type="text/css">
	footer{
		display: none;
	}
	.input-wrap{
		margin-top: 3rem;
	}
	input[type="submit"]{
		background-color: #3f51b5 !important;
		color: #fff;
	}
	input[type="submit"]:hover{
		background-color: #283164 !important;
	}
	.error-disp{
		color: red;
	}
</style>
</head>
<body>
<br><br>
<h3 class="text-center">Admin Database View</h3>
	<div class="input-wrap col-sm-4 col-sm-offset-4">
		<span class="error-disp"><?php echo $error;?></span>
		<form method="POST" action="#">
			<input type="password" required="" class="input margin-bottom-10" placeholder="password" name="password">
			<input type="submit" name="submit" class="input">
		</form>
	</div>
	<?php
	include_once("includes/footer.php");
	?>
</body>
</html>
