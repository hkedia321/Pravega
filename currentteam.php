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
							<div class="col-xs-12">
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Abhijai Tibrewala</span>
											<span class="overlay__content-text"><b>Team Captain</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/abhijai.tibrewala?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/abhijai.jpg" alt="abhijai" class="overlay__image teamphoto">
										<div class="text-center"><b>Abhijai Tibrewala<br><span class="thoda-light">Team Captain</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Aagosh Mishra</span>
											<span class="overlay__content-text"><b>Powertrain Head</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/aagosh.mishra?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/aagosh.jpg" alt="aagosh" class="overlay__image teamphoto">
										<div class="text-center"><b>Aagosh Mishra<br><span class="thoda-light">Powertrain Head</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Arnav Patel</span>
											<span class="overlay__content-text"><b>Team Manager</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/Arnavpatel.1996?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/arnav.jpg" alt="arnav" class="overlay__image teamphoto">
										<div class="text-center"><b>Arnav Patel<br><span class="thoda-light">Team Manager</span></b></div>
										<br>
									</div>
								</div>
						
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Ayush Nahata</span>
											<span class="overlay__content-text"><b>Composites Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/nahata.ayush?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/ayush.jpg" alt="ayush" class="overlay__image teamphoto">
										<div class="text-center"><b>Ayush Nahata<br><span class="thoda-light">Composites Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Nishant Dixit</span>
											<span class="overlay__content-text"><b>R &amp; D Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/nishant.dixit.509?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/nishant.jpg" alt="nishant" class="overlay__image teamphoto">
										<div class="text-center"><b>Nishant Dixit<br><span class="thoda-light">R &amp; D Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Shantanu Singh</span>
											<span class="overlay__content-text"><b>Chassis and Assembly Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/profile.php?id=100004831695623&amp;fref=ts&amp;ref=br_tf"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/shantanu.jpg" alt="shantanu" class="overlay__image teamphoto">
										<div class="text-center"><b>Shantanu Singh<br><span class="thoda-light">Chassis and Assembly Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Siddharth Sethi</span>
											<span class="overlay__content-text"><b>Ergonomics Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/siddharth.sethi.564?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/siddharth.jpg" alt="siddharth" class="overlay__image teamphoto">
										<div class="text-center"><b>Siddharth Sethi<br><span class="thoda-light">Ergonomics Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Sushant Srivastav</span>
											<span class="overlay__content-text"><b>Aerodynamics Lead</b></span>
											
										</div>
										<img src="img/general/teams/currentteam/sushant.jpg" alt="sushant" class="overlay__image teamphoto">
										<div class="text-center"><b>Sushant Srivastav<br><span class="thoda-light">Aerodynamics Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Tarun Bhatia</span>
											<span class="overlay__content-text"><b>Design and Analysis Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/tpbhatia197418?ref=br_rs"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/tarun.jpg" alt="tarun" class="overlay__image teamphoto">
										<div class="text-center"><b>Tarun Bhatia<br><span class="thoda-light">Design and Analysis Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Udit Saraswat</span>
											<span class="overlay__content-text"><b>Vehicle Dynamics Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/udit7897?fref=ts&amp;ref=br_tf"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/udit.jpg" alt="udit" class="overlay__image teamphoto">
										<div class="text-center"><b>Udit Saraswat<br><span class="thoda-light">Vehicle Dynamics Lead</span></b></div>
										<br>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col team-member-wrapper-col-board">
									<div class="overlay team-member-wrapper">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Yashasavi Karnena</span>
											<span class="overlay__content-text"><b>Electrical Lead</b></span>
											
											<div class="profile__sharing-links--alt">
												<a target="_blank" href="https://www.facebook.com/chinnu.avinnash?fref=ts"><i class="fa fa-facebook profile__sharing-link"></i></a>
											</div>
										</div>
										<img src="img/general/teams/currentteam/yashasavi.jpg" alt="yashasavi" class="overlay__image teamphoto">
										<div class="text-center"><b>Yashasavi Karnena<br><span class="thoda-light">Electrical Lead</span></b></div>
										<br>
									</div>
								</div>
							</div><hr class="team-divider"><div class="col-xs-12">
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Aarati Noronha</span>
										<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/aarati.jpg" alt="aarati" class="overlay__image teamphoto">
									<div class="text-center"><b>Aarati Noronha<br><span class="thoda-light">Vehicle Dynamics</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Akshyt Kumar</span>
										<span class="overlay__content-text"><b>Powertrain</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/akshyt.jpg" alt="akshyt" class="overlay__image teamphoto">
									<div class="text-center"><b>Akshyt Kumar<br><span class="thoda-light">Powertrain</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Dhananjay Singh</span>
										<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/dhananjay.jpg" alt="dhananjay" class="overlay__image teamphoto">
									<div class="text-center"><b>Dhananjay Singh<br><span class="thoda-light">Vehicle Dynamics</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Prathamesh Gunjal</span>
										<span class="overlay__content-text"><b>Powertrain</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/prathamesh.jpg" alt="prathamesh" class="overlay__image teamphoto">
									<div class="text-center"><b>Prathamesh Gunjal<br><span class="thoda-light">Powertrain</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Rishiraj Chauhan</span>
										<span class="overlay__content-text"><b>Powertrain</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/rishiraj.jpg" alt="rishiraj" class="overlay__image teamphoto">
									<div class="text-center"><b>Rishiraj Chauhan<br><span class="thoda-light">Powertrain</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Sachin Ht</span>
										<span class="overlay__content-text"><b>Powertrain</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/sachin.jpg" alt="sachin" class="overlay__image teamphoto">
									<div class="text-center"><b>Sachin Ht<br><span class="thoda-light">Powertrain</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Shreyansh Garhewal</span>
										<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/shreyansh.jpg" alt="shreyansh" class="overlay__image teamphoto">
									<div class="text-center"><b>Shreyansh Garhewal<br><span class="thoda-light">Vehicle Dynamics</span></b></div>
									<br>
								</div>
							</div>
							
							<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
								<div class="overlay team-member-wrapper">
									<div class="overlay__background"></div>
									<div class="overlay__content text-center text-color-2">
										<span class="overlay__content-heading">Vaibhav Sharma</span>
										<span class="overlay__content-text"><b>Powertrain</b></span>
										
									</div>
									<img src="img/general/teams/currentteam/vaibhav.jpg" alt="vaibhav" class="overlay__image teamphoto">
									<div class="text-center"><b>Vaibhav Sharma<br><span class="thoda-light">Powertrain</span></b></div>
									<br>
								</div>
							</div>
						</div><hr class="team-divider"><div class="col-xs-12">
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Adithya Venugopal</span>
									<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/adithya.jpg" alt="adithya" class="overlay__image teamphoto">
								<div class="text-center"><b>Adithya Venugopal<br><span class="thoda-light">Vehicle Dynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Aman Agarwal</span>
									<span class="overlay__content-text"><b>Powertrain</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/aman.jpg" alt="aman" class="overlay__image teamphoto">
								<div class="text-center"><b>Aman Agarwal<br><span class="thoda-light">Powertrain</span></b></div>

								<br>
							</div>
						</div>
				
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Amogh Chourasia</span>
									<span class="overlay__content-text"><b>Brakes</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/amogh.jpg" alt="amogh" class="overlay__image teamphoto">
								<div class="text-center"><b>Amogh Chourasia<br><span class="thoda-light">Brakes</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Apoorv Singh</span>
									<span class="overlay__content-text"><b>Electrical</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/apoorv.jpg" alt="apoorv" class="overlay__image teamphoto">
								<div class="text-center"><b>Apoorv Singh<br><span class="thoda-light">Electrical</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Ashwarya Anupam</span>
									<span class="overlay__content-text"><b>Composites</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/ashwarya.jpg" alt="ashwarya" class="overlay__image teamphoto">
								<div class="text-center"><b>Ashwarya Anupam<br><span class="thoda-light">Composites</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Moideen Shariq</span>
									<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/moideen.jpg" alt="moideen" class="overlay__image teamphoto">
								<div class="text-center"><b>Moideen Shariq<br><span class="thoda-light">Vehicle Dynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Naman Shukla</span>
									<span class="overlay__content-text"><b>Marketing Executive</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/naman.jpg" alt="naman" class="overlay__image teamphoto">
								<div class="text-center"><b>Naman Shukla<br><span class="thoda-light">Marketing Executive</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Nikhil Agrawal</span>
									<span class="overlay__content-text"><b>Marketing Executive</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/nikhil.jpg" alt="nikhil" class="overlay__image teamphoto">
								<div class="text-center"><b>Nikhil Agrawal<br><span class="thoda-light">Marketing Executive</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Nimish Gupta</span>
									<span class="overlay__content-text"><b>Marketing Executive</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/nimish.jpg" alt="nimish" class="overlay__image teamphoto">
								<div class="text-center"><b>Nimish Gupta<br><span class="thoda-light">Marketing Executive</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Rohit Aggrawal</span>
									<span class="overlay__content-text"><b>Composites</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/rohit.jpg" alt="rohit" class="overlay__image teamphoto">
								<div class="text-center"><b>Rohit Aggrawal<br><span class="thoda-light">Composites</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Ruchit Jain</span>
									<span class="overlay__content-text"><b>Aerodynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/ruchit.jpg" alt="ruchit" class="overlay__image teamphoto">
								<div class="text-center"><b>Ruchit Jain<br><span class="thoda-light">Aerodynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">S Sooraj</span>
									<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/s.jpg" alt="s" class="overlay__image teamphoto">
								<div class="text-center"><b>S Sooraj<br><span class="thoda-light">Vehicle Dynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Saahil Vishwakarma</span>
									<span class="overlay__content-text"><b>Data Acquisition</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/saahil.jpg" alt="saahil" class="overlay__image teamphoto">
								<div class="text-center"><b>Saahil Vishwakarma<br><span class="thoda-light">Data Acquisition</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Sai Teja</span>
									<span class="overlay__content-text"><b>Drive Train</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/sai.jpg" alt="sai" class="overlay__image teamphoto">
								<div class="text-center"><b>Sai Teja<br><span class="thoda-light">Drive Train</span></b></div>

								<br>
							</div>
						</div>
					
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Salil Madhav</span>
									<span class="overlay__content-text"><b>Brakes</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/salil.jpg" alt="salil" class="overlay__image teamphoto">
								<div class="text-center"><b>Salil Madhav<br><span class="thoda-light">Brakes</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Sanchit Chaudhary</span>
									<span class="overlay__content-text"><b>Composite</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/sanchit.jpg" alt="sanchit" class="overlay__image teamphoto">
								<div class="text-center"><b>Sanchit Chaudhary<br><span class="thoda-light">Composite</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Shantan Khandar</span>
									<span class="overlay__content-text"><b>Design</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/shantan.jpg" alt="shantan" class="overlay__image teamphoto">
								<div class="text-center"><b>Shantan Khandar<br><span class="thoda-light">Design</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Udhay Singh</span>
									<span class="overlay__content-text"><b>Powertrain</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/udhay.jpg" alt="udhay" class="overlay__image teamphoto">
								<div class="text-center"><b>Udhay Singh<br><span class="thoda-light">Powertrain</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Uma Shankar</span>
									<span class="overlay__content-text"><b>Data Acquisition</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/uma.jpg" alt="uma" class="overlay__image teamphoto">
								<div class="text-center"><b>Uma Shankar<br><span class="thoda-light">Data Acquisition</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Utkarsh Palav</span>
									<span class="overlay__content-text"><b>Electrical</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/utkarsh.jpg" alt="utkarsh" class="overlay__image teamphoto">
								<div class="text-center"><b>Utkarsh Palav<br><span class="thoda-light">Electrical</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Vibhor Malik</span>
									<span class="overlay__content-text"><b>Aerodynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/vibhor.jpg" alt="vibhor" class="overlay__image teamphoto">
								<div class="text-center"><b>Vibhor Malik<br><span class="thoda-light">Aerodynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Vignesh R</span>
									<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/vignesh.jpg" alt="vignesh" class="overlay__image teamphoto">
								<div class="text-center"><b>Vignesh R<br><span class="thoda-light">Vehicle Dynamics</span></b></div>

								<br>
							</div>
						</div>
						
						<div class="col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col">
							<div class="overlay team-member-wrapper">
								<div class="overlay__background"></div>
								<div class="overlay__content text-center text-color-2">
									<span class="overlay__content-heading">Vishal Agrawal</span>
									<span class="overlay__content-text"><b>Vehicle Dynamics</b></span>
									
								</div>
								<img src="img/general/teams/currentteam/vishal.jpg" alt="vishal" class="overlay__image teamphoto">
								<div class="text-center"><b>Vishal Agrawal<br><span class="thoda-light">Vehicle Dynamics</span></b></div>

								<br>
							</div>
						</div>
					</div>						</div>
				</div>
			</section>
		</div>

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