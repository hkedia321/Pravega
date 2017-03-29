<?php
$title="Pravega Racing - Videos";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style type="text/css">
	.video-wrap{
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.video-wrap h3{
		margin-left: 10px;
	}
	video{
		margin-left: auto;
		margin-right: auto;
		width: 100%;
	}
	iframe{
		margin-right: auto;
		margin-left: auto;
		text-align: center;
		max-width: 100% !important;
	}
	.iframediv{
		text-align: center;
		max-width: 95vw !important;
	}

	@media (min-width: 769px){
		video{
			width: 85%;
			height: 500px;
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
			<h2 class="text-center">Videos</h2>
			<?php
			$videos[0]=["I am Pravega","https://www.youtube.com/embed/k-nV3hSLjXA"];
			$videos[]=["Journey 2016","https://www.youtube.com/embed/NCxfsVK4cNs"];
			$videos[]=["Season Video 2015-16","https://www.youtube.com/embed/rioU2CtJQhs"];
			for($i=0;$i<count($videos);$i++)
			{
				$title=$videos[$i][0];
				$link=$videos[$i][1];
				echo "
				<div class='col-sm-10 col-sm-offset-1 col-xs-12 video-wrap animated-parent' data-appear-top-offset='0'>
					<div class='col-xs-12 iframediv animated animate__fade-in-down-short'>
					<h3 class=''>$title</h3>
						<iframe width='660' height='372' src='$link' frameborder='0' allowfullscreen></iframe>
					</div>
				</div>
				";
			}
			?>
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