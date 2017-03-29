<?php
$title="Pravega Racing - Cars";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/flickity.min.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/carslider.css">
<script>
	function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	}
</script>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>
	<?php
	$navactive="cars";
	require_once('includes/nav.php');
	?>
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-cars">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Cars</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>A line or two about our cars..
					</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="cars-intro">
		<div class="container">
			<div class="row">
				<div id="wheelnavdiv" class="">
					<div class="carousel carselect" data-flickity='{ "imagesLoaded": true, "percentPosition": false, 
					"wrapAround": true }'>

					<img class="carousel-cell-image"
					src="img/general/cars/race1.png" alt="PRV 16" name="detailsprv16" />

					<img class="carousel-cell-image"
					src="img/general/cars/race2.png" alt="PRV 15" name="detailsprv15" />

					<img class="carousel-cell-image"
					src="img/general/cars/race3.png" alt="PRV 14" name="detailsprv14" />

					<img class="carousel-cell-image"
					src="img/general/cars/race4.png" alt="PRV 13" name="detailsprv13" />

					<img class="carousel-cell-image"
					src="img/general/cars/race5.png" alt="PRV Delta Pheonix"  name="detailsprvdp" />
				</div>
				<br>
				<p class="carousel-status"></p>
			</div>

			<div class="container" id="detailsdiv">
				<div class="row" id="detailsprv16" class="detailsprv">
					<h1 class="text-center">PRV 16</h1>
					<div class="tech col-mdd">
						<h5 class="techh5">Technical Specifications:</h5>
						<p><b>Weight</b>: 257 kg<br>
							<b>Wheelbase</b>: 1560 mm<br>
							<b>Suspension</b>: Double unequal length A-arm with push rod actuated spring dampers<br>
							<b>Dampers</b>: Ohlins TTX 25 Mk II 4 Way adjustable<br>
							<b>Brakes type</b>: 4 outboard discs<br>
							<b>Chassis</b>: Steel space frame<br>
							<b>Wheels</b>: Keizer 3 piece Aluminium rims , 7x10<br>
							<b>Tires Dry</b>: Hoosier 18x7.5-10 ,R25B<br>
							<b>Tires Wet</b>: Hoosier , WET<br>
							<b>Engine</b>: Honda CBR 600RR<br>
							<b>Dry Sump Lubrication System</b><br>
							<b>Introduced Aero package including Front and Rear Wings</b><br>
						</p>
					</div>
					<div class="autocad col-mdd">
						<div style="max-width: 908px; max-height: 605px;">
							<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 66.63%; overflow: hidden;">
								<iframe src="PRV_VR.203.html"
								allowfullscreen
								style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
								frameborder="0"
								scrolling="no">
							</iframe>
						</div>
					</div>
				</div>
				
			</div>

			<div class="row" id="detailsprv15" class="detailsprv">
				<h1 class="text-center">PRV 15</h1>
				<div class="tech col-mdd">
					<h5 class="techh5">Technical Specifications:</h5>
					<p><b>Weight</b>: 235 kg<br>
						<b>Wheelbase</b>: 1564 mm<br>
						<b>Suspension</b>: Double unequal length A-arm with push rod actuated spring dampers<br>
						<b>Dampers</b>: Ohlins TTX 25 Mk II 4 Way adjustable<br>
						<b>Brakes type</b>: 4 outboard discs<br>
						<b>Chassis</b>: Steel space frame<br>
						<b>Wheels</b>: 13x7 Oz Racing Wheels<br>
						<b>Tires Dry</b>: Continental<br>
						<b>Tires Wet</b>: Continental<br>
						<b>Engine</b>: Honda CBR 600RR<br>
						<b>Displacement</b>: 600 cc<br>
						<b>In house developed Pneumatic gear and clutch control unit.</b><br>
						<b>Carbon epoxy composite body and Drexler limited slip differential</b><br>
					</p>
				</div>
				<div class="autocad col-mdd">
					<div style="max-width: 908px; max-height: 605px;">
						<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 66.63%; overflow: hidden;">
							<iframe src="PRV15_VR.205.html"
							allowfullscreen
							style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
							frameborder="0"
							scrolling="no">
						</iframe>
					</div>
				</div>
			</div>

		</div>

		<div class="row" id="detailsprv14" class="detailsprv">
			<h1 class="text-center">PRV 14</h1>
			<div class="tech col-mdd">
				<h5 class="techh5">Technical Specifications:</h5>
				<p><b>Weight</b>: 265 kg<br>
					<b>Wheelbase</b>: 1600 mm<br>
					<b>Suspension</b>: Double unequal length A-arm with push rod actuated spring dampers<br>
					<b>Dampers</b>: Tanner<br>
					<b>Brakes type</b>: 4 outboard discs<br>
					<b>Chassis</b>: Steel space frame<br>
					<b>Wheels</b>: 13x7 Oz Racing Wheels<br>
					<b>Tires Dry</b>: Continental<br>
					<b>Tires Wet</b>: Continental<br>
					<b>Engine</b>: Honda CBR 600RR<br>
					<b>Displacement</b>: 600 cc<br>
					<b>Student built Pneumatic gear and clutch control unit and translogic dashboard.</b><br>
					<b>Twin layup Carbon fiber body and limited slip differential</b><br>
				</p>
			</div>
			<div class="autocad col-mdd">
				<div style="max-width: 908px; max-height: 605px;">
					<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 66.63%; overflow: hidden;">
						<iframe src="prv 14 render_VR.208.html"
						allowfullscreen
						style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
						frameborder="0"
						scrolling="no">
					</iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="detailsprv13" class="detailsprv">
		<h1 class="text-center">PRV 13</h1>
		<div class="tech col-mdd">
			<h5 class="techh5">Technical Specifications:</h5>
			<p><b>Weight</b>: 283 kg<br>
				<b>Wheelbase</b>: 1600 mm<br>
				<b>Suspension</b>: Double unequal length A-arm with push rod actuated spring dampers<br>
				<b>Dampers</b>: Tanner<br>
				<b>Brakes type</b>: 4 outboard discs<br>
				<b>Chassis</b>: Steel space frame<br>
				<b>Wheels</b>: 13x7 Oz Racing Wheels<br>
				<b>Tires Dry</b>: Hoosier Racing Slicks<br>
				<b>Tires Wet</b>: Continental<br>
				<b>Engine</b>: Honda CBR 600RR<br>
				<b>Displacement</b>: 600 cc<br>
				<b>Sequential 6 speed shift Electronic shift button type open differential</b><br>
			</p>
		</div>
		<div class="autocad col-mdd">
			<div style="max-width: 908px; max-height: 605px;">
				<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 66.63%; overflow: hidden;">
					<iframe src="prv13 render_VR.207.html"
					allowfullscreen
					style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
					frameborder="0"
					scrolling="no">
				</iframe>
			</div>
		</div>
	</div>

</div>

<div class="row" id="detailsprvdp" class="detailsprv">
	<h1 class="text-center">PRV Delta Pheonix</h1>
	<div class="tech col-mdd">
		<h5 class="techh5">Technical Specifications:</h5>
		<p><b>Weight</b>: 320 kg<br>
			<b>Wheelbase</b>: 1580 mm<br>
			<b>Suspension</b>: Double unequal length A-arm with push rod actuated spring dampers<br>
			<b>Dampers</b>: Tanner<br>
			<b>Brakes type</b>: 4 outboard discs<br>
			<b>Chassis</b>: Steel space frame<br>
			<b>Wheels</b>: 13x7 Oz Racing Wheels<br>
			<b>Tires Dry</b>: Hoosier Racing Slicks<br>
			<b>Tires Wet</b>: JK Tyres<br>
			<b>Engine</b>: Honda CBR 600RR<br>
			<b>Dry Sump Lubrication System</b><br>
			<b>Displacement</b>: 600 cc<br>
			<b>Sequential 6 speed shift Electronic shift button type open differential</b><br>
		</p>
	</div>
	<div class="autocad col-mdd">
		<div style="max-width: 908px; max-height: 605px;">
			<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 66.63%; overflow: hidden;">
				<img src="img/general/cars/prvdp.png" class="cars-details-img">
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
</section>
<br>
<!-- End of section -->

<!-- End of section -->

<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
<?php
include_once("includes/footer.php");
?>
<script src="js/min/myjs/flickity.pkgd.min.js"></script>
<script type="text/javascript">
	var i_frame=document.getElementById('iframe_cars');
	$( window ).resize(function() {
		resizeIframe(i_frame);
	});
</script>
<script type="text/javascript">
	var prv16=$("#detailsprv16");
	var prv15=$("#detailsprv15");
	var prv14=$("#detailsprv14");
	var prv13=$("#detailsprv13");
	var prvdp=$("#detailsprvdp");
	
	makeallhide("detailsprv16");
	function makeallhide(ele){
		prv16.fadeOut();
		prv15.fadeOut();
		prv14.fadeOut();
		prv13.fadeOut();
		prvdp.fadeOut();
		$("#"+ele).fadeIn();
	}
	$("#wheelnavdiv").click(function(){
		var ele=$(".is-selected").attr("name");
		makeallhide(ele);
		
	});
</script>
</body>
</html>
