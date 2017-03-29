<?php
$title="Pravega Racing - Contact Us";
include_once('includes/head.php');
?>
<?php
if(isset($_POST['contactsubmit']))
{
	$success=false;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	global $auth;
	global $baseurl;

	include_once('mongodb.php');
	$url=$baseurl."?name=".$name."&email=".$email."&message=".$message."&auth=".$auth;
	$response=file_get_contents($url);
	$response=json_decode($response);
	if($response->success==1)
		$success=true;
	if($success)
	{
		?>
		<script type="text/javascript">
			alert("Thank you for contacting us. We will get back to you soon.");
			window.location.assign("redirect_to.php?location="+window.location.href);
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Sorry, there was an error sending your message. Please try calling or emailing us.");
			window.location.assign("redirect_to.php?location="+window.location.href);
		</script>
		<?php
	}
}
?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
	.addressinfo{
		transition: color ease 0.5s;
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
	.open-box{
		padding: 0.3rem 0.5rem;
		color: #fff;
		margin: 0.3rem;
		cursor: pointer;
	}
	.open-box-tech{
		background-color: #b60b2a;
		background-color: rgba(0,0,0,0.6);
	}
	.open-box-mang{
		background-color: #20207b;

		background-color: rgba(0,0,0,0.6);
	}
	.team-br{
		
	}
</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div id="preloader">
		<div id="status">&nbsp;</div>
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
						<span class="text-decor animated animate__roll-in"></span>If you have any queries or would like to know more about the team, feel free to contact us
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
				<div class="column-8">
					<h4>Leave us a message</h4>
					<h5 class="redcolor" id="errordiv"></h5>
					<form name="contactus_form" onsubmit="return validateForm();" action="contactus.php" class="form" method="POST">
						<div class="grid-container">
							<div class="grid-row margin-bottom-20">
								<div class="column-6">
									<input type="text" required class="input margin-bottom-10" placeholder="Name" name="name">
								</div>
								<div class="column-6">
									<input type="email" required class="input margin-bottom-10" placeholder="Email" name="email">
								</div>
							</div>
							<div class="grid-row">
								<div class="column-12">
									<textarea required class="input margin-bottom-10" name="message" rows="8" cols="40" placeholder="Message"></textarea>
									<button type="submit" name="contactsubmit" value="1" class="button text-color-10 margin-top-10 margin-bottom-30">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="column-4 background-color-11 padding-top-20 padding-bottom-20">
					<h4><b><span class="color-red-impp">Pravega</span> Racing</b></h4>
					<ul class="list list--address margin-bottom-20">
						<span class="addressinfo">
							<li class="list__item"><i class="fa fa-map-marker" aria-hidden="true"></i>
								VIT University, Vellore-632014, India
							</li>
						</span>
						
						<div class="open-box-wrapper">
							<span class="addressinfo">

								<div class="open-box open-box-tech">
									<i class="fa fa-phone" aria-hidden="true"></i> Technical Department
								</div>
								<div class="tech-collapse collapse">
									&nbsp;Abhijai Tibrewala +91 8888048822
									<br>
									(<span class="thoda-light">Team Captain</span>)
								</div>
								<div class="open-box open-box-mang">
									<i class="fa fa-phone" aria-hidden="true"></i> Management Department
								</div>
								<div class="mang-collapse collapse">
									&nbsp;Arnav Patel +91 76398028020
									<br>
									(<span class="thoda-light">Management Head</span>)
									<br class="team-br">
									&nbsp;Ashish Chadda +91 9944110344
									<br>
									(<span class="thoda-light">Marketing Head</span>)
								</div>
							</span>
						</div>
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
	<script type="text/javascript">
		function validateForm() {
			var x = document.forms["contactus_form"]["name"].value;
			var y = document.forms["contactus_form"]["email"].value;
			var z = document.forms["contactus_form"]["message"].value;
			if (x == null || x == ""||y == null || y == ""||z == null || z == "") {
				$("#errordiv").html("<b>Please Fill all the fields.</b>");
				return false;
			}
			return true;
		}
	</script>
</body>
</html>