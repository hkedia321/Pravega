<?php
$title="Pravega Racing - Contact Us";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
	.addressinfo{
		transition: color ease 0.5s;
		cursor: pointer;
	}
	.addressinfo:hover{
		color: #000;
	}
	.color-black-impp{
		color: #000;
	}
	.list--address{
		font-size: 1.2rem;
	}
	.color-red-impp{
		color: #dc092f;
	}
	.thoda-light{
		color: #909090;
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
	$navactive="contactus";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-contactus">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Contact us</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>If you have any queries or would like to know more about the team, feel free to contact us.
					</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="first-section">
	</section>
	<section class="margin-top-40">
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-7">
					<h4>Leave us a message</h4>
					<form action="http://flagstone.vidalthemes.com/post.php" class="form">
						<div class="grid-container">
							<div class="grid-row margin-bottom-20">
								<div class="column-6">
									<input type="text" required class="input margin-bottom-10" placeholder="Name">
								</div>
								<div class="column-6">
									<input type="email" required class="input margin-bottom-10" placeholder="Email">
								</div>
							</div>
							<div class="grid-row">
								<div class="column-12">
									<textarea class="input margin-bottom-10" name="name" rows="8" cols="40" placeholder="Message"></textarea>
									<button class="button text-color-10 margin-top-10 margin-bottom-30">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="column-5 background-color-11 padding-top-20 padding-bottom-20">
					<h4><b><span class="color-red-impp">Pravega</span> Racing</b></h4>
					<ul class="list list--address margin-bottom-20">
						<span class="addressinfo">
							<li class="list__item"><i class="fa fa-map-marker" aria-hidden="true"></i>
								VIT University, Vellore-632014, India
							</li>
						</span>
						<br>
						<span class="addressinfo">
							<li class="list__item list--address-phone"><i class="fa fa-phone" aria-hidden="true"></i>
								Aagosh Mishra(<span class="thoda-light">Team Captain</span>) - +91 9994838100
							</li>
							<li class="list__item list--address-phone">&nbsp;&nbsp;&nbsp;&nbsp;Abhijai Tibrewala(<span class="thoda-light">Technical Coordinator</span>) - +91 8888048822</li>
							<li class="list__item list--address-phone">&nbsp;&nbsp;&nbsp;&nbsp;Arnav Patel(<span class="thoda-light">Management Head</span>) - +91 76398028020</li>
							<li class="list__item list--address-phone">&nbsp;&nbsp;&nbsp;&nbsp;Ashish Chadda(<span class="thoda-light">Marketing Head</span>) - +91 9944110344</li>
						</span>
						<span class="addressinfo">
							<li class="list__item list--address-phone">
								<b><i class="fa fa-envelope" aria-hidden="true">

								</i>
								pravegaracing@vit.ac.in</b>
							</li>
						</span>
					</ul>

				</div>
			</div>
		</div>
	</section>
	<section class="text-center">
		<div style="width:80%;margin-left:auto;margin-right:auto;max-width:100%;overflow:hidden;height:500px;color:red;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=VIT+University,+Vellore,+Tamil+Nadu,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embed-map-code" rel="nofollow" href="http://www.szablonypremium.pl/website" id="make-map-information">motywy html</a><style>#embedded-map-display img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=65d4e24c-8508-5507-f23c-d5aaad35bc87&c=embed-map-code&u=1475047957" defer="defer" async="async"></script>




		</section>
<br>
		<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
		<?php
		include_once("includes/footer.php");
		?>
	</body>
	</html>