<?php
$title="Pravega Racing - Current Team";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
	.team-member-wrapper .overlay__background {
		background-color: rgba(255, 255, 255, 0.8);
	}
	.team-member-wrapper{
		cursor: pointer;
	}
	.team-member-wrapper-col{
		padding: 0px;
		margin: 0px;
	}
	.teamphoto{
		max-width: 100%;
		border-radius: 100%;
	}
	.team-divider{
		margin: 20px 0px;
		width: 90%;
		margin-left: auto;
		margin-right: auto;

	}
	.layer{
		background-color: rgba(0,0,0,0.5);
	}
	.thoda-light {
		color: #909090;
	}
	.team-member-wrapper-col-board{
		height: 210px;
	}
	@media (max-width: 769px){
		.teamphoto{
			height:200px;
		}
		.team-member-wrapper-col-board{
			height: 250px;
		}
	}
	@media (max-width: 630px){
		.teamphoto{
			height:160px;
		}
		.team-member-wrapper-col-board{
			height: 210px;
		}
	}
	@media (max-width: 530px){
		.teamphoto{
			height:140px;
		}
	}
	@media (max-width: 430px){
		.teamphoto{
			height:120px;
		}
	}

</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	$navactive="team";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-teams">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>The A-team which makes it happen
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<section class="first-section container-fluid margin-bottom-20">
					<div class="grid-container-fluid">
						<h1 class="text-center">Current team</h1>
						<div class="row team-members-wrapper">
							<?php
							$teammember=null;
							$teammember[0]=["Aagosh Mishra","Powertrain Executive","https://www.facebook.com/aagosh.mishra?fref=ts"];
							$teammember[]=["Abhijai Tibrewala","Team Captain","https://www.facebook.com/abhijai.tibrewala?fref=ts"];
							
							$teammember[]=["Arnav Patel","Management Head","https://www.facebook.com/Arnavpatel.1996?fref=ts"];
							$teammember[]=["Ashish Chadda","Marketing Head","https://www.facebook.com/ashish.chadda?fref=ts"];
							$teammember[]=["Ayush Nahata","Composites Lead","https://www.facebook.com/nahata.ayush?fref=ts"];
							$teammember[]=["Nishant Dixit","R & D Lead","https://www.facebook.com/nishant.dixit.509?fref=ts"];
							$teammember[]=["Rishabh Khanna","Powertrain Lead","https://www.facebook.com/RishabhKhanna0203?fref=ts"];
							$teammember[]=["Shantanu Singh","Chassis and Assembly Lead","https://www.facebook.com/profile.php?id=100004831695623&fref=ts&ref=br_tf"];
							$teammember[]=["Siddharth Sethi","Ergonomics Lead","https://www.facebook.com/siddharth.sethi.564?fref=ts"];
							$teammember[]=["Sushant Srivastav","Aerodynamics Lead",""];
							$teammember[]=["Tarun Bhatia","Design and Analysis Lead","https://www.facebook.com/tpbhatia197418?ref=br_rs"];
							$teammember[]=["Udit Saraswat","Vehicle Dynamics Lead","https://www.facebook.com/udit7897?fref=ts&ref=br_tf"];
							$teammember[]=["Yashasavi Karnena","Electrical Lead","https://www.facebook.com/chinnu.avinnash?fref=ts"];

							sort($teammember);
							$temp=$teammember[0];
							$teammember[0]=$teammember[1];
							$teammember[1]=$temp;
							$no_team_members=count($teammember);
							echo "<div class='col-xs-12'>";
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$name=ucwords(strtolower($name));
								$fname=strtolower(substr($name,0,strpos($name," ")));

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname;
								if($name=="Nimish Mehra")
									$imglink="nimish2";
								
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board'>
									<div class='overlay team-member-wrapper'>
										<div class='overlay__background'></div>
										<div class='overlay__content text-center text-color-2'>
											<span class='overlay__content-heading'>{$name}</span>
											<span class='overlay__content-text'><b>{$role}</b></span>
											";
											if(!empty($fblink))
											{
												echo"
												<div class='profile__sharing-links--alt'>
													<a target='_blank' href='{$fblink}'><i class='fa fa-facebook profile__sharing-link'></i></a>
												</div>";
											}
											echo "
										</div>
										<img src='img/general/teams/currentteam/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}<br><span class='thoda-light'>{$role}</span></b></div>
										<br>
									</div>
								</div>
								";	
							}
							echo "</div>";
							$teammember=null;
							$teammember[0]=["Aarati Noronha","Vehicle Dynamics",""];		
							$teammember[]=["Akshyt Kumar","Powertrain",""];
							$teammember[]=["Dhananjay Singh","Vehicle Dynamics",""];			
							$teammember[]=["Prathamesh Gunjal","Powertrain",""];
							$teammember[]=["Rishiraj Chauhan","Powertrain",""];
							$teammember[]=["Sachin HT","Powertrain",""];
							$teammember[]=["Shreyansh Garhewal","Vehicle Dynamics",""];
							$teammember[]=["Vaibhav Sharma","Powertrain",""];
							

							sort($teammember);
							$no_team_members=count($teammember);
							echo "<hr class='team-divider'><div class='col-xs-12'>";
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$name=ucwords(strtolower($name));
								$fname=strtolower(substr($name,0,strpos($name," ")));

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname;
								if($name=="Nimish Mehra")
									$imglink="nimish2";
								
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col'>
									<div class='overlay team-member-wrapper'>
										<div class='overlay__background'></div>
										<div class='overlay__content text-center text-color-2'>
											<span class='overlay__content-heading'>{$name}</span>
											<span class='overlay__content-text'><b>{$role}</b></span>
											";
											if(!empty($fblink))
											{
												echo"
												<div class='profile__sharing-links--alt'>
													<a target='_blank' href='{$fblink}'><i class='fa fa-facebook profile__sharing-link'></i></a>
												</div>";
											}
											echo "
										</div>
										<img src='img/general/teams/currentteam/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}<br><span class='thoda-light'>{$role}</span></b></div>
										<br>
									</div>
								</div>
								";		
							}
							echo "</div>";
							
							$teammember=null;



							$teammember[0]=["Nimish Gupta","Marketing Executive",""];
							$teammember[]=["Naman Shukla","Marketing Executive",""];
							$teammember[]=["Nikhil Agrawal","Marketing Executive",""];
							$teammember[]=["Udhay Singh","Powertrain",""];
							$teammember[]=["Kunal Aggrawal","Vehicle Dynamics",""];
							$teammember[]=["Saahil Vishwakarma","Data Acquisition",""];
							//31
							$teammember[]=["Amogh Chourasia","Brakes",""];
							$teammember[]=["Rohit Aggrawal","Composites",""];
							$teammember[]=["Ruchit Jain","Aerodynamics",""];
							$teammember[]=["Manmohit Singh","Design",""];
							$teammember[]=["Sanchit Chaudhary","Composite",""];
							$teammember[]=["Salil Madhav","Brakes",""];
							$teammember[]=["Rebanta Roy","Powertrain",""];
							$teammember[]=["Rishabh Jain","Design",""];

							$teammember[]=["S Sooraj","Vehicle Dynamics",""];
							$teammember[]=["Adithya Venugopal","Vehicle Dynamics",""];
							$teammember[]=["Vishal Agrawal","Vehicle Dynamics",""];
							//41
							$teammember[]=["Uma Shankar","Data Acquisition",""];
							$teammember[]=["Ashwarya Anupam","Composites",""];
							$teammember[]=["Sai Teja","Drive Train",""];
							$teammember[]=["Samarjeet Sharma","Powertrain",""];
							$teammember[]=["Vibhor Malik","Aerodynamics",""];
							$teammember[]=["Aman Agarwal","Powertrain",""];
							$teammember[]=["Vignesh R","Vehicle Dynamics",""];
							$teammember[]=["Shantan Khandar","Design",""];
							$teammember[]=["Utkarsh Palav","Electrical",""];
							$teammember[]=["Apoorv Singh","Electrical",""];
							//51
							$teammember[]=["Saksham Bhardwaj","Vehicle Dynamics",""];
							$teammember[]=["Amitabh Das","Powertrain",""];
							$teammember[]=["Moideen Shariq","Vehicle Dynamics",""];
							sort($teammember);

							$no_team_members=count($teammember);
							echo "<hr class='team-divider'><div class='col-xs-12'>";
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$name=ucwords(strtolower($name));
								$fname=strtolower(substr($name,0,strpos($name," ")));

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname;
								if($name=="Nimish Mehra")
									$imglink="nimish2";
								if($name=="Rishabh Jain")
									$imglink="rishabhjain";
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col'>
									<div class='overlay team-member-wrapper'>
										<div class='overlay__background'></div>
										<div class='overlay__content text-center text-color-2'>
											<span class='overlay__content-heading'>{$name}</span>
											<span class='overlay__content-text'><b>{$role}</b></span>
											";
											if(!empty($fblink))
											{
												echo"
												<div class='profile__sharing-links--alt'>
													<a target='_blank' href='{$fblink}'><i class='fa fa-facebook profile__sharing-link'></i></a>
												</div>";
											}
											echo "
										</div>
										<img src='img/general/teams/currentteam/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}<br><span class='thoda-light'>{$role}</span></b></div>

										<br>
									</div>
								</div>
								";
							}
							echo "</div>";
							?>
						</div>
					</div>
				</section>
			</div>

		</div>
	</div>
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</div>

</body>
</html>