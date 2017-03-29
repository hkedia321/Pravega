<?php
session_start();
global $error;
if(!isset($error))
	$error="";
if(isset($_SESSION['user_auth']) and $_SESSION['user_auth']=="admin");else{
	$error="Please Log in first!";
	header("Location:admin.php");
}
$title="Pravega Racing - Choose";
include_once('includes/head.php');
?>
<style type="text/css">
	footer{
		display: none;
	}
	.input-wrap{
		margin-top: 3rem;
	}
	.select{
		margin-top: 12rem;
	}
	button{
		background-color: #333 !important;
		color: #fff;
	}
	button:hover{
		background-color: #000 !important;
	}
	.text-right{
		text-align: right;
		position: absolute;
		top: 20px;
		right: 60px;
	}
	.button-logout{
		margin-top: 1rem;
	}
</style>
</head>
<body>
	<div class="container">
		<a href="adminlogout.php"><button class="button text-white text-right button-logout" onclick="return confirm('Are you sure you want to log-Out?');">Logout</button></a>
	<h4 class="text-center select">Select a database:</h4>
		<div class="input-wrap col-sm-4 col-sm-offset-4 text-center">
			<a href="showcontactus.php"><button class="button button__brand-color-1 button__medium text-color-10">Contact us</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="showsubscribe.php"><button class="button button__brand-color-1 button__medium text-color-10">Subscribe</button></a>
			<br>
		
		</div>
		<?php
		include_once("includes/footer.php");
		?>
	</div>
</body>
</html>