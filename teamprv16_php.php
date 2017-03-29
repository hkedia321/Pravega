<?php
$title="Pravega Racing - Team PRV16";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
	.team-member-wrapper .overlay__background {
		background-color: rgba(255, 255, 255, 0.8);
	}
	.team-member-wrapper{
		cursor: pointer;
		padding: 1.3rem;
	}
	.teamphoto{
		max-width: 100%;
		border-radius: 100%;
	}
	.sub-header-banner-teams16{
		background-image:  url('img/general/bgs/teamprv16bg.jpg');
		background-repeat: no-repeat;
	}
	.layer{
		
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
		<div class="parallax__background sub-header-banner-teams16">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>The A-team who made it happen
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
						<h1 class="text-center">PRV 16 - Team</h1>
						<div class="row team-members-wrapper">
							<?php
							$teammember[0]=["Tribhuvan Singh","Team Captain",""];
							$teammember[]=["Vyom Gautam","Team Manager",""];
							$no_team_members=count($teammember);
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$lname="";
								$name=ucwords(strtolower($name));
								if(empty(strpos($name," ")) or !strpos($name," "))
									$fname=$name;
								else{
									$fname=strtolower(substr($name,0,strpos($name," ")));
									$lname=strtolower(substr($name,strpos($name," ")+1));
								}

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname.$lname;
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6'>
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
										<img src='img/general/teams/prv16/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}</b></div>
										<br>
									</div>
								</div>
								";
							}
							$teammember=null;
							$teammember[0]=["Sehdev Sikka","",""];
							$teammember[]=["Rohan Gupta","",""];
							$teammember[]=["Yash Chabbra","",""];
							$teammember[]=["Ritesh Tekriwal","",""];
							$teammember[]=["Rishabh Ratni","",""];
							$teammember[]=["Aditya Tiwari","",""];
							$teammember[]=["Arsel Hasan","",""];
							$teammember[]=["Aditya Jain","",""];
							$teammember[]=["Tanay Shah","",""];
							$teammember[]=["Ansh Gandhi","",""];
							$teammember[]=["Saurabh","",""];
							$teammember[]=["Vatsal Patel","",""];
							//11
							
							
							$teammember[]=["Chitranjan","",""];
							$teammember[]=["Akshay Poojary","",""];
							$teammember[]=["Tejas Kothari","",""];
							$teammember[]=["Siddharth Sethi","",""];
							$teammember[]=["Rishabh Khanna","",""];
							$teammember[]=["Abhijai Tibrewala","",""];
							$teammember[]=["Tarun Bhatia","",""];
							$teammember[]=["Nimish Mehra","",""];
							$teammember[]=["Varun Nair","",""];
							$teammember[]=["Ayush Nahata","",""];
							$teammember[]=["Abhay Singh","",""];
							$teammember[]=["Yashasvi Karnena","",""];
							
							$teammember[]=["Shantanu","",""];
							
							$teammember[]=["Aagosh","",""];
							$teammember[]=["Apoorv Kakkar","",""];
							
							$teammember[]=["Nishant Dixit","",""];
							$teammember[]=["Ashish Chadha","",""];
							$teammember[]=["Kiran Jomy","",""];
							$teammember[]=["Deep Doshi","",""];
							$teammember[]=["Arnav Patel","",""];

							sort($teammember);
							$no_team_members=count($teammember);
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$lname="";
								$name=ucwords(strtolower($name));
								if(empty(strpos($name," ")) or !strpos($name," "))
									$fname=$name;
								else{
									$fname=strtolower(substr($name,0,strpos($name," ")));
									$lname=strtolower(substr($name,strpos($name," ")+1));
								}

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname.$lname;
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6'>
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
										<img src='img/general/teams/prv16/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}</b></div>
										<br>
									</div>
								</div>
								";
							}
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