<?php
$title="iframe";
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
<body>
	<section class="main-wrapper">
		<div id="wheelnavdiv">
			<div class="carousel carselect" data-flickity='{ "imagesLoaded": true, "percentPosition": false, 
			"wrapAround": true }'>

			<img class="carousel-cell-image"
			src="img/general/cars/race1.png" alt="PRV16" />

			<img class="carousel-cell-image"
			src="img/general/cars/race2.png" alt="PRV15" />

			<img class="carousel-cell-image"
			src="img/general/cars/race3.png" alt="PRV14" />

			<img class="carousel-cell-image"
			src="img/general/cars/race4.png" alt="PRV13" />

			<img class="carousel-cell-image"
			src="img/general/cars/race5.png" alt="PRVdp" />
		</div>
		<br>
		<p class="carousel-status"></p>
	</div>
	<div id="wrap" class="">
		<div id="showcase" class="noselect">
			<img class="cloud9-item" id="imgprv16" src="img/general/cars/race1.png" alt="PRV 16"> 
			<img class="cloud9-item" id="imgprv15" src="img/general/cars/race2.png" alt="PRV 15"> 
			<img class="cloud9-item" id="imgprv14" src="img/general/cars/race3.png" alt="PRV 14">
			<img class="cloud9-item" id="imgprv13" src="img/general/cars/race4.png" alt="PRV 13">
			<img class="cloud9-item" id="imgprvdp" src="img/general/cars/race5.png" alt="PRV dp"> 
		</div>
		<div class="nav" class="noselect">
			<button class="left"> ← </button>
			<button class="right">→</button>
		</div>
	</div>
	<div class="container">
		<div class="cardetails row ">
			<br>
			<div id="detailsprv16" class="detailsdiv">
				<h1 class="text-center"><b>PRV 16</b></h1>
				<div class="techspecsdivv col-sm-6">
					<h5 class="">Technical Specifications:</h5>
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
				<div class="sliderdiv col-sm-6">
					<iframe id="photos_iframe1" src="includes/prv16slider.html" class="" scrolling="no" onload="resizeIframe(this)"></iframe>
				</div>
			</div>
			<div id="detailsprv15" class="detailsdiv">
				<h1 class="text-center"><b>PRV 15</b></h1>
				<div class="techspecsdivv col-sm-6">
					<h5 class="">Technical Specifications:</h5>
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
				<div class="sliderdiv col-sm-6">
					<iframe id="photos_iframe2" src="includes/prv15slider.html" scrolling="no" onload="resizeIframe(this)"></iframe>
				</div>
			</div>
			<div id="detailsprv14" class="detailsdiv">
				<h1 class="text-center"><b>PRV 14</b></h1>
				<div class="techspecsdivv col-sm-6">
					<h5 class="">Technical Specifications:</h5>
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
				<div class="sliderdiv col-sm-6">
					<iframe id="photos_iframe3" src="includes/prv14slider.html" scrolling="no" onload="resizeIframe(this)"></iframe>
				</div>
			</div>
			<div id="detailsprv13" class="detailsdiv">
				<h1 class="text-center"><b>PRV 13</b></h1>
				<div class="techspecsdivv col-sm-6">
					<h5 class="">Technical Specifications:</h5>
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
				<div class="sliderdiv col-sm-6">
					<iframe id="photos_iframe4" src="includes/prv13slider.html" scrolling="no" onload="resizeIframe(this)"></iframe>
				</div>
			</div>
			<div id="detailsprvdp" class="detailsdiv">
				<h1 class="text-center"><b>PRV Delta Pheonix</b></h1>
				<div class="techspecsdivv col-sm-6">
					<h5 class="">Technical Specifications:</h5>
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
				<div class="sliderdiv col-sm-6">
					<iframe id="photos_iframe5" src="includes/prvdpslider.html" scrolling="no" onload="resizeIframe(this)"></iframe>
				</div> 	
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="js/min/jquery-min.js"></script>
<script src="js/min/myjs/jquery.reflection.js"></script> 
<script src="js/min/myjs/jquery.cloud9carousel.js"></script> 
<script src="js/min/myjs/flickity.pkgd.min.js"></script>
<script>
	$("#detailsprv16").hide();
	$("#detailsprv15").hide();
	$("#detailsprv14").hide();
	$("#detailsprv13").hide();
	$("#detailsprvdp").hide();

	function showcardetails(){
		if($(window).width()<769)
			return;
		console.log("showcardetails called");
		if ($("#imgprv16").css("z-index")==100)
		{
			$("#detailsprv16").fadeIn();
			resizeIframe(document.getElementById('photos_iframe1'));
		}
		else
		{
			$("#detailsprv16").hide();
		}

		if ($("#imgprv15").css("z-index")==100)
		{
			$("#detailsprv15").fadeIn();
			resizeIframe(document.getElementById('photos_iframe2'));
		}
		else
		{
			$("#detailsprv15").hide();
		}

		if ($("#imgprv14").css("z-index")==100)
		{
			$("#detailsprv14").fadeIn();
			resizeIframe(document.getElementById('photos_iframe3'));
		}
		else
		{
			$("#detailsprv14").hide();
		}

		if ($("#imgprv13").css("z-index")==100)
		{
			$("#detailsprv13").fadeIn();
			resizeIframe(document.getElementById('photos_iframe4'));
		}
		else
		{
			$("#detailsprv13").hide();
		}

		if ($("#imgprvdp").css("z-index")==100)
		{
			$("#detailsprvdp").fadeIn();
			resizeIframe(document.getElementById('photos_iframe5'));
		}
		else
		{
			$("#detailsprvdp").hide();
		}

	}
	$(function() {
		var showcase = $("#showcase")

		showcase.Cloud9Carousel( {
			yPos: 42,
			yRadius: 48,
			mirrorOptions: {
				gap: 12,
				height: 0.2
			},
			buttonLeft: $(".nav > .left"),
			buttonRight: $(".nav > .right"),
			autoPlay: false,
			bringToFront: true,
			onRendered: showcaseUpdated,
			onLoaded: function() {
				showcase.css( 'visibility', 'visible' )
				showcase.css( 'display', 'none' )
				showcase.fadeIn( 1500 )
			}
		} )

		function showcaseUpdated( showcase ) {
			var title = $('#item-title').html(
				$(showcase.nearestItem()).attr( 'alt' )
				);

			var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI);
			title.css('opacity', 0.5 + (0.5 * c));
			showcardetails();
        //
    }

      // Simulate physical button click effect
      $('.nav > button').click( function( e ) {
      	var b = $(e.target).addClass( 'down' )
      	setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
        	/* left arrow */
        	case 37:
        	$('.nav > .left').click()
        	break

        	/* right arrow */
        	case 39:
        	$('.nav > .right').click()
        }
    } )
  })
</script> 
<script>
	var angleStart = -360;

// jquery rotate animation
function rotate(li,d) {
	$({d:angleStart}).animate({d:d}, {
		step: function(now) {
			$(li)
			.css({ transform: 'rotate('+now+'deg)' })
			.find('label')
			.css({ transform: 'rotate('+(-now)+'deg)' });
		}, duration: 0
	});
}

// show / hide the options
function toggleOptions(s) {
	$(s).toggleClass('open');
	var li = $(s).find('li');
	var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
	for(var i=0; i<li.length; i++) {
		var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
		$(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
	}
}

$('.selector button').click(function(e) {
	toggleOptions($(this).parent());
});

setTimeout(function() { toggleOptions('.selector'); }, 100);
</script>
<script>
	var $carousel = $('.carselect').flickity();
	var flkty = $carousel.data('flickity');

	function updateStatus() {
		var cellNumber = flkty.selectedIndex + 1;
		if (cellNumber==1)
		{
			$("#detailsprv16").fadeIn();
		}
		else
		{
			$("#detailsprv16").fadeOut();
		}

		if (cellNumber==2)
		{
			$("#detailsprv15").fadeIn();
		}
		else
		{
			$("#detailsprv15").fadeOut();
		}

		if (cellNumber==3)
		{
			$("#detailsprv14").fadeIn();
		}
		else
		{
			$("#detailsprv14").fadeOut();
		}

		if (cellNumber==4)
		{
			$("#detailsprv13").fadeIn();
		}
		else
		{
			$("#detailsprv13").fadeOut();
		}

		if (cellNumber==5)
		{
			$("#detailsprvdp").fadeIn();
		}
		else
		{
			$("#detailsprvdp").fadeOut();
		}
	}
	updateStatus();
	$carousel.on( 'select.flickity', updateStatus );
</script>
<script>
	$( window ).resize(function() {
		var id_ifr=document.getElementById("photos_iframe1");
		resizeIframe(id_ifr);
		id_ifr=document.getElementById("photos_iframe2");
		resizeIframe(id_ifr);
		id_ifr=document.getElementById("photos_iframe3");
		resizeIframe(id_ifr);
		id_ifr=document.getElementById("photos_iframe4");
		resizeIframe(id_ifr);
		id_ifr=document.getElementById("photos_iframe5");
		resizeIframe(id_ifr);
	});
</script>
</body>
</html>