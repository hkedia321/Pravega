<?php
session_start();
global $error;
if(!isset($error))
	$error="";
if(isset($_SESSION['user_auth']) and $_SESSION['user_auth']=="admin");else{
	$error="Please Log in first!";
	header("Location:admin.php");
}
$title="Pravega Racing - Contact us data";
include_once('includes/head.php');
function show_contact(){	
	global $con;
	$query="SELECT * FROM contactus order by id desc;";
	$result=mysqli_query($con,$query);
	if($result)
		return $result;
	return false;
}
$result=show_contact();
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
	body{
		background-color: #b60b2a;
		min-height: 100vh;
		color: white;
	}
	footer{
		display: none;
	}
	.button{
		padding: .425rem 1.250rem;
	}
	.text-white{
		color: #fff !important;
	}
	.text-right{
		text-align: right;
		float: right;
	}
	.but-goback{
		border-radius: 50%;
		padding: 1rem 0.5rem;
	}
	.table{
		background-color: white;
		color: black;
	}
</style>
</head>
<body>
	<div class="container">
		<br>	
		<a href="choose.php"><button class="button text-white but-goback"><i class="fa fa-arrow fa-arrow-left" aria-hidden="true"></i>&nbsp;Go back</button></a>

		<a href="adminlogout.php"><button class="button text-white text-right button-logout" onclick="return confirm('Are you sure you want to log-Out?');">Logout</button></a>
		<br>
		<br>
		<div class="table-title">
			<h3>Contact us database</h3>
		</div>
		<div class="database-div table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th class="text-left">Sl. No.</th>
						<th class="text-left">Date</th>
						<th class="text-left">Name</th>
						<th class="text-left">Email</th>
						<th class="text-left">Message</th>
						<th class="text-left">Hide</th>

					</tr>
				</thead>
				<tbody class="table-hover">
					<form action="hideshowcontactus.php" method="POST">
						<?php
						$no=0;
						if($result){
							while($row=mysqli_fetch_assoc($result))
							{
								if($row["visible"]==1){
									$no++;
									$id=$row["id"];
									$name=$row["name"];
									if(!$name)
										$name="unknown";
									$email=$row["email"];
									if(!$email)
										$email="unknown";
									$message=$row["message"];
									if(!$message)
										$message="unknown";
									$date=$row["insdate"];
									if(!$date)
										$date="unknown";
									?>
									<tr>
										<td class="text-left"><?php echo $no?></td>
										<td class="text-left"><?php echo $date?></td>
										<td class="text-left"><?php echo $name?></td>
										<td class="text-left"><?php echo $email?></td>
										<td class="text-left message-td"><?php echo $message?></td>
										<td class="text-left"><button class="button button__red text-color-10" type="submit" name="cuhide" value="<?php echo $id;?>">Hide</button></td>
									</tr>
									<?php
								}
							}
						}
						?>
					</form>
				</tbody>
			</table>
		</div>
		<br>
		<div class="table-title">
			<h3>Hidden Entries</h3>
			<button class="btn btn-primary hideshowbtn"></button>
		</div>
		<div class="database-div table-responsive hiddendiv">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th class="text-left">Sl. No.</th>
						<th class="text-left">Date</th>
						<th class="text-left">Name</th>
						<th class="text-left">Email</th>
						<th class="text-left">Message</th>
						<th class="text-left">Make Visible</th>

					</tr>
				</thead>
				<tbody class="table-hover">
					<form action="hideshowcontactus.php" method="POST">
						<?php
						$result=show_contact();
						$no=0;
						if($result){
							while($row=mysqli_fetch_assoc($result))
							{
								if($row["visible"]==0){
									$no++;
									$id=$row["id"];
									$name=$row["name"];
									if(!$name)
										$name="unknown";
									$email=$row["email"];
									if(!$email)
										$email="unknown";
									$message=$row["message"];
									if(!$message)
										$message="unknown";
									$date=$row["insdate"];
									if(!$date)
										$date="unknown";
									?>
									<tr>
										<td class="text-left"><?php echo $no?></td>
										<td class="text-left"><?php echo $date?></td>
										<td class="text-left"><?php echo $name?></td>
										<td class="text-left"><?php echo $email?></td>
										<td class="text-left message-td"><?php echo $message?></td>
										<td class="text-left"><button type="submit" class="button button__red text-color-10" name="cuvisible" value="<?php echo $id;?>">Make Visible</button></td>
									</tr>
									<?php
								}
							}
						}
						?>
					</form>
				</tbody>
			</table>
		</div>
		<?php
		include_once("includes/footer.php");
		global $success_action;
		if(isset($success_action))
		{
			?>
			<script type="text/javascript">
				alert(<?php echo $success_action;?>);
			</script>
			<?php
			$success_action=null;
		}

		?>

	</div>
	<br><br>
	<script type="text/javascript">
		function hide_hidden(){
			$(".hiddendiv").slideUp();
			$(".hideshowbtn").text("Show hidden");
		}
		function show_hidden(){
			$(".hiddendiv").slideDown();
			$(".hideshowbtn").text("Hide");
		}
		hide_hidden();
		var count=0;
		$(".hideshowbtn").click(function(){
			count++;
			if(count%2==1)
				show_hidden();
			else
				hide_hidden();
		});
	</script>	
</body>
</html>