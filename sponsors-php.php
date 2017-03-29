<?php
$title="Pravega Racing - sponsors";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/sponsors.css" />
<style>
	.layer{
		background-color: rgba(0,0,0,0.55);
	}
	@media (min-width: 769px){
		.sponsors-intro{
			padding: 1rem 10rem;
		}
	}
	@media (max-width: 769px){
		.sponsors-intro{
			padding-left: 1rem;
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
	$navactive="sponsors";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="parallax background-color-11 sub-header sub-header-banner-sponsors">
		<div class="parallax__background sub-header-banner-sponsors">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Our Sponsors</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>Without their support, we wouldn't be where we are
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container grid-container">
		<div class="row">
			<div class="left-section col-md-offset-0 col-md-12 padding-left-0">
				
				<p class="sponsors-intro si1 first-section">

					The design and manufacturing of a Formula Car is quite expensive. In order to meet finances, the marketing team approaches Multinational Company’s and request for technical and monetary support. Since the assistance from company’s play a vital role in our functioning  we are extremely grateful to them.
					<br><br>
					<span class="thoda-bada">The following are the team sponsors :</span>
				</p>
	
				<br>
				<section class="title-sponsors" id="titlesponsors">
					<div class="grid-container-fluid">
						<h4 class="text-left heading-sponsor heading-sponsor-title" title="click to expand">Title Sponsors<span class="faspan"></span></h4>
						<div class="grid-container-fluid hide-n-seek">
							<div class="grid-row">
								<div class="push-column-2 col-xs-6 col-sm-4 margin-bottom-20 sponsordiv">
									<div class="overlay">
										<div class="overlay__background overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Star Sports</span>
										</div>
										<div class="img-div-upper">
											<img src="img/sponsors/title/starsports.png" alt="starsports" class="overlay__image overlay__image--zoom">
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 push-column-1 margin-bottom-20 sponsordiv">
									<div class="overlay">
										<div class="overlay__background overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Continental</span>
										</div>
										<div class="img-div-upper">
											<img src="img/sponsors/title/continental.png" alt="bmw" class="overlay__image overlay__image--zoom">
										</div>
									</div>
								</div>
							</div>
							<div class="grid-row">
								<div class="col-xs-6 col-sm-4 margin-bottom-20 sponsordiv">
									<div class="overlay">
										<div class="overlay__background overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">BMW</span>
										</div>
										<div class="img-div-upper">
											<img src="img/sponsors/title/bmw.png" alt="continental" class="overlay__image overlay__image--zoom">
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 margin-bottom-20 sponsordiv">
									<div class="overlay">
										<div class="overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Cummins</span>
										</div>
										<div class="img-div-upper">
											<img src="img/sponsors/title/cummins.png" alt="cummins" class="overlay__image overlay__image overlay__image--zoom">
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 margin-bottom-20 sponsordiv">
									<div class="overlay">
										<div class="overlay__background overlay__background"></div>
										<div class="overlay__content text-center text-color-2">
											<span class="overlay__content-heading">Liqui Moly</span>
										</div>
										<div class="img-div-upper">
											<img src="img/sponsors/title/liqui.png" alt="liqui" class="overlay__image overlay__image--zoom">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="gold-sponsors" id="goldsponsors">
					<div class="grid-container-fluid">
						<h4 class="text-left  heading-sponsor" title="click to expand">Gold Sponsors<span class="faspan"></span></h4>
						<div class="hide-n-seek">
							<div class="grid-container-fluid">
								<div class="grid-row">
									<?php
									$gold[0]=["Parksyde Homes","parksyde"];
									$gold[]=["SKF","skf"];
									$gold[]=["Motul","motul"];
									$gold[]=["TE Connectivity","te"];
									$gold[]=["Hitachi","hitachi"];
									$gold[]=["NAL","nal"];
									$gold[]=["Red Bull","redbull"];
									$gold[]=["Henkel","henkel"];
									$gold[]=["DAD","dad"];
									$gold[]=["ABC Composites","abc"];
									$gold[]=["Behr","behr"];
									$gold[]=["ASAP","asap"];
									$gold[]=["Atul","atul"];
									$gold[]=["Key Shot","keyshot"];
									$gold[]=["Velox","velox"];

									for($i=0;$i<count($gold);$i++)
									{
										$name=$gold[$i][0];
										$imglink=$gold[$i][1];
										echo "
										<div class='col-xs-6 col-sm-3 margin-bottom-20 sponsordiv'>
											<div class='overlay'>
												<div class='overlay__background overlay__background'></div>
												<div class='overlay__content text-center text-color-2'>
													<span class='overlay__content-heading'>$name</span>
												</div>
												<div class='img-div-upper-gold'>
													<img src='img/sponsors/gold/$imglink.png' alt='picture' class='overlay__image overlay__image--zoom'>
												</div>
											</div>
										</div>
										";
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="silver-sponsors" id="silversponsors">
					<div class="grid-container-fluid">
						<h4 class="text-left  heading-sponsor" title="click to expand">Silver Sponsors<span class="faspan"></span></h4>
						<div class="hide-n-seek">
							<div class="grid-container-fluid">
								<div class="grid-row">
									<?php
									$silver[0]=["Mitter Fastners","mitter"];
									$silver[]=["Mentor Graphics","mentor"];
									$silver[]=["K. R. Composites","kr"];
									$silver[]=["Ricardo","ricardo"];
									$silver[]=["SBEE Cables","sbee"];
									$silver[]=["Acktron","acktron"];
									$silver[]=["Ajay Engineering Works","ajay"];
									$silver[]=["Vishal","vishal"];
									$silver[]=["Jaipur Printers","jaipur"];
									$silver[]=["FPCL","fpcl"];
									$silver[]=["Proxima","proxima"];
									$silver[]=["Dassault Systems","dassault"];
									$silver[]=["Keizer Tyres","keizer"];
									$silver[]=["Novoflex","novoflex"];
									$silver[]=["Cornitos","cornitos"];
									$silver[]=["RDMC","rdmc"];
									for($i=0;$i<count($silver);$i++)
									{
										$name=$silver[$i][0];
										$imglink=$silver[$i][1];
										echo "
										<div class='col-xs-6 col-sm-3 margin-bottom-20 sponsordiv'>
											<div class='overlay'>
												<div class='overlay__background overlay__background'></div>
												<div class='overlay__content text-center text-color-2'>
													<span class='overlay__content-heading'>$name</span>
												</div>
												<div class='img-div-upper-silver'>
													<img src='img/sponsors/silver/$imglink.png' alt='picture' class='overlay__image overlay__image--zoom'>
												</div>
											</div>
										</div>
										";

									}
									?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="bronze-sponsors" id="bronzesponsors">
					<div class="grid-container-fluid">
						<h4 class="text-left  heading-sponsor" title="click to expand">Bronze Sponsors<span class="faspan"></span></h4>
						<div class="hide-n-seek">
							<div class="grid-container-fluid">
								<div class="grid-row">
									<?php
									$bronze[0]=["MAP","map"];
									$bronze[]=["Across","across"];
									$bronze[]=["Autodesk","autodesk"];
									$bronze[]=["Matlab","matlab"];
									
									for($i=0;$i<count($bronze);$i++)
									{
										$name=$bronze[$i][0];
										$imglink=$bronze[$i][1];
										echo "
										<div class='col-xs-6 col-sm-3 margin-bottom-20 sponsordiv'>
											<div class='overlay'>
												<div class='overlay__background overlay__background'></div>
												<div class='overlay__content text-center text-color-2'>
													<span class='overlay__content-heading'>$name</span>
												</div>
												<div class='img-div-upper-bronze'>
													<img src='img/sponsors/bronze/$imglink.png' alt='picture' class='overlay__image overlay__image--zoom'>
												</div>
											</div>
										</div>
										";
									}
									?>
									
								</div>
							</div>
						</div>
					</div>
				</section>

				
			</div>

			
		</div>
	</div>


	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="row">
		<?php
		include_once("includes/footer.php");
		?>
	</div>
</body>
</html>