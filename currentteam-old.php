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
</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
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
					<h2 class="text-color-10 animated animate__fade-in-left-short">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short">
						<span class="text-decor animated animate__roll-in"></span>A line or two about our teams..
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
							$team_members=["Aagosh Mishra","Aayush Nahata","Abhijai Tibrewal","Arnav Patel","Ashish Chadda","Nimish Mehra",
							"Nishant Dixit","Rishabh Khanna","Siddharth Sethi","Shantanu Singh","Udit Saraswat","Tarun Bhatia",
							"Varun Nair","Yashasavi Karnena","Rishiraj Chauhan","Sushant Srivastav","Aarti Noroha","Vaibhav Sharma",
							"Akysht Kumar","Sachin HT","Prathamesh Gunjal","Shreyansh Garhewal","Dhananjay Singh","Udhay Singh",
							"Naman Shukla","Nimish Gupta","Nikhil Agrawal","Kunal Aggrawal","Saahil Vishwakarma","Amogh Chourasia",
							"Rohit Aggrawal","Rishabh Jain","Ruchit Jain","Manmohit Singh","Surbhit Bhardwaj","Sanchit Chaudhary",
							"Salil Madhav","Rebanta Roy","S Sooraj","Adithya Venugopal","Vishal Agrawal","Uma Shankar",
							"Ashwarya Anupam","Sai Teja","Samarjeet Sharma","Vibhor Malik","Aman Agarwal","Vignesh K",
							"Shantan Khandal","Utkarsh Palav","Apoorv Singh","Saksham Bhardwaj","Amitabh Das","Moideen Shariq",
							"Shantanu Khandar"
							];
							$team_roles=["President"];
							$no_team_members=count($team_members);
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$team_members[$i];
								$name=ucwords($name);
					$fname="placeholder";//strtolower(substr($name,0,strpos($name," ")));
					$role=$team_roles[0];//$i
					echo "
					<div class='col-md-2 col-sm-3 col-xs-6'>
						<div class='overlay team-member-wrapper'>
							<div class='overlay__background'></div>
							<div class='overlay__content text-center text-color-2'>
								<span class='overlay__content-heading'>{$name}</span>
								<span class='overlay__content-text'><b>{$role}</b></span>
								<div class='profile__sharing-links--alt'>
									<a href='#'><i class='fa fa-facebook profile__sharing-link'></i></a>
								</div>
							</div>
							<img src='img/general/teams/currentteam/{$fname}.png' alt='{$fname}' class='overlay__image'>
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