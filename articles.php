<?php
$title="Pravega Racing - Online Articles";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style type="text/css">
	.teamphoto{
		width: 100%;
		height: 300px !important;
	}
</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	$navactive="media";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-media">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Media</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>A sneak peek into some of our stunning events and performances
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<br>
			<h2 class="text-center">Online Articles</h2>
			<div class="animated-parent" data-appear-top-offset="00">
				<div class='col-xs-12 col-sm-4'>
					<a href="http://www.news18.com/news/formula-one/vellore-engineering-students-ready-to-test-their-formula-car-in-germany-1261808.html" target="_blank">
						<div class='overlay'>
							<div class='overlay__background'></div>
							<div class='overlay__content text-center text-color-2'>
								<span class='overlay__content-heading'>Vellore Engineering Students Ready to Test Their Formula Car in Germany</span>
								<span class='overlay__content-text'><b>NEWS 18</b></span>
							</div>
							<img src='img/general/media/news18.png' alt='The Hindu' class='overlay__image overlay__image--zoom teamphoto'>

						</div>
					</a>
					<br>
				</div>

				<div class='col-xs-12 col-sm-4'>
					<a href="http://www.thehindu.com/todays-paper/tp-national/tp-tamilnadu/vit-students-f1-race-car-design-comes-up-a-winner-in-italy/article5287188.ece" target="_blank">
						<div class='overlay'>
							<div class='overlay__background'></div>
							<div class='overlay__content text-center text-color-2'>
								<span class='overlay__content-heading'>VIT students’ F1 race car design comes up a winner in Italy</span>
								<span class='overlay__content-text'><b>THE HINDU</b></span>
							</div>
							<img src='img/general/media/thehindu.png' alt='The Hindu' class='overlay__image overlay__image--zoom teamphoto'>

						</div>
					</a>
					<br>
				</div>

				<div class='col-xs-12 col-sm-4'>
					<a href="http://www.hindustantimes.com/bhopal/bhopal-boys-in-germany-for-motorcar-design-contest/story-08ERPLWAuK45Iu8iMRAKdL.html" target="_blank">
						<div class='overlay'>
							<div class='overlay__background'></div>
							<div class='overlay__content text-center text-color-2'>
								<span class='overlay__content-heading'>Bhopal boys in Germany for motorcar design contest</span>
								<span class='overlay__content-text'><b>HINDUSTAN TIMES</b></span>
							</div>
							<img src='img/general/media/hindustantimes.png' alt='The Hindu' class='overlay__image overlay__image--zoom teamphoto'>

						</div>
					</a>
					<br>
				</div>
			</div>

		</div>
	</div>
	<br>
	<br><br>
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</body>
	</html>