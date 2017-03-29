<?php
$title="Pravega Racing - PR activity";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">

<link rel="stylesheet" type="text/css" href="css/mycss/practivity.css">
<style>
	
	.color-black-impp{
		color: #000;
	}
	.color-red-impp{
		color: #dc092f;
	}
	.practivityimg{
		display: block;
	}
</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>


	<!-- End of page pre-loader -->

	<?php
	$navactive="practivity";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-practivity">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">PR activities</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>We do our best to keep our sponsors satisfied by branding them through our various PR activities and exciting marketing campaigns
					</h5>
				</div>
			</div>
		</div>
	</section>
	<main class="main-wrapper container">
		<div class="row" id="mainbody">
			
		</div>
		<br><br>
	</main>
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#mainbody").load("practivity_mainbody.php");
		});
	</script>
</body>
</html>