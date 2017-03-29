<?php
$title="Pravega Racing - Photos";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/media.css">
<style>

</style>
<script type="text/javascript">
	function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	}
</script>
<style type="text/css">
	.photos-navul li.active a{
		color: #fff !important;
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
	<div>
		<div class="container-fluid" id="photosmain">
			<div class="row">
				<br>
				<div class="side-nav col-sm-3">
					<ul class="photos-navul">
						<li id="li_fsg16" class="active"><a>Formula Student Germany 2016</a></li>
						<li id="li_drag16"><a href="photosdrag16.php#photosmain">Drag Race 2016</a></li>
						<li id="li_launch16"><a href="photorollout16.php#photosmain">Rollout 2016</a></li>
						<li id="li_fsi16"><a href="photosfsi16.php#photosmain">Formula Student India 2016</a></li>

						<li id="li_fsg15"><a href="photosfsg15.php#photosmain">Formula Student Germany 2015</a></li>
						<li id="li_launch15"><a href="photosrollout15.php#photosmain">Rollout 2015</a></li>
						<li id="li_riviera15"><a href="photosriviera15.php#photosmain">Riviera 2015</a></li>
						<li id="li_fsi15"><a href="photosfsi15.php#photosmain">Formula Student India 2015</a></li>

						<li id="li_fsg14"><a href="photosfsg14.php#photosmain">Formula Student Germany 2014</a></li>
						<li id="li_launch14"><a href="photosrollout14.php#photosmain">Rollout 2014</a></li>
						<li id="li_riviera14"><a href="photosriviera14.php#photosmain">Riviera 2014</a></li>
					</ul>
					<br>
				</div>
				<div class="main-media col-sm-9">
					<div id="fsg16">
						<?php
						for($i=1;$i<=9;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='fsg16-img-link' href='img/general/media/uncompressed/fsg16/$i.JPG' data-lightbox='fsg16-set' data-title=''>
								<img class='fsg16-img' src='img/general/media/fsg16/$i.JPG' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="drag16">
						<?php
						for($i=1;$i<=6;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='drag16-img-link' href='img/general/media/uncompressed/dragrace2016/$i.png' data-lightbox='drag16-set' data-title=''>
								<img class='drag16-img' src='img/general/practivity/dragrace2016/$i.png' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="launch16">
						<?php
						for($i=1;$i<=5;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='launch16-img-link' href='img/general/media/uncompressed/rollout2016/$i.png' data-lightbox='launch16-set' data-title=''>
								<img class='launch16-img' src='img/general/practivity/rollout2016/$i.png' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="fsi16">
						<?php
						for($i=1;$i<=7;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='fsi16-img-link' href='img/general/media/uncompressed/fsi16/$i.png' data-lightbox='fsi16-set' data-title=''>
								<img class='fsi16-img' src='img/general/media/fsi16/$i.png' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="fsg15">
						<?php
						for($i=1;$i<=8;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='fsg15-img-link' href='img/general/media/uncompressed/fsg15/$i.jpg' data-lightbox='fsg15-set' data-title=''>
								<img class='fsg15-img' src='img/general/media/fsg15/$i.jpg' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="launch15">
						<?php
						for($i=1;$i<=10;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='launch15-img-link' href='img/general/media/uncompressed/launch15/$i.jpg' data-lightbox='launch15-set' data-title=''>
								<img class='launch15-img' src='img/general/practivity/rollout2015/$i.png' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="riviera15">
						<?php
						for($i=1;$i<=7;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='riviera15-img-link' href='img/general/media/uncompressed/riviera15/$i.jpg' data-lightbox='riviera15-set' data-title=''>
								<img class='riviera15-img' src='img/general/practivity/riviera/$i.png' alt=''/>
							</a>
						</div>
						";
						?>
					</div>


					<div id="fsi15">
						<?php
						for($i=1;$i<=7;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='fsi15-img-link' href='img/general/media/uncompressed/fsi15/$i.jpg' data-lightbox='fsi15-set' data-title=''>
								<img class='fsi15-img' src='img/general/media/fsi15/$i.jpg' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="fsg14">
						<?php
						for($i=1;$i<=10;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='fsg14-img-link' href='img/general/media/uncompressed/fsg14/$i.JPG' data-lightbox='fsg14-set' data-title=''>
								<img class='fsg14-img' src='img/general/media/fsg14/$i.JPG' alt=''/>
							</a>
						</div>
						";
						?>
					</div>


					<div id="launch14">
						<?php
						for($i=1;$i<=10;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='launch14-img-link' href='img/general/media/uncompressed/launch14/$i.jpg' data-lightbox='launch14-set' data-title=''>
								<img class='launch14-img' src='img/general/media/launch14/$i.jpg' alt=''/>
							</a>
						</div>
						";
						?>
					</div>

					<div id="riviera14">
						<?php
						for($i=1;$i<=8;$i++)
							echo "
						<div class='col-xs-6 col-sm-3'>
							<a class='riviera14-img-link' href='img/general/media/uncompressed/riviera14/$i.jpg' data-lightbox='riviera14-set' data-title=''>
								<img class='riviera14-img' src='img/general/media/riviera14/$i.jpg' alt=''/>
							</a>
						</div>
						";
						?>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<br>
<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
<div class="col-xs-12 padding-left-0 padding-right-0">
	<?php
	include_once("includes/footer.php");
	?>
	<script type="text/javascript" src="js/lightbox.min.js"></script>
	<script type="text/javascript">
		var all_ids=["#fsg16","#drag16","#launch16","#fsi16","#fsg15","#launch15","#riviera15","#fsi15","#fsg14","#launch14","#riviera14"];//all div ids. Just add an entry here along with similar name in li tag


		function hideall(divid){
			var i;
			for(i=0;i<all_ids.length;i++)
				$(all_ids[i]).hide();
			$("#"+divid).fadeIn();
		}
		function removeallactive(){
			var i;
			for(i=0;i<all_ids.length;i++)
			{
				var iddli="#li_"+all_ids[i].substring(1);
				$(iddli).removeClass("active");
			}
		}

		hideall("fsg16");
		$(".side-nav li").click(function(){
			removeallactive();
			$(this).addClass("active");

			var idd=$(this).attr("id");
			idd=idd.substring(3);
			hideall(idd);
		});


	</script>
</div>
</body>
</html>