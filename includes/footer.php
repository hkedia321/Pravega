<footer class="background-color-2 padding-top-40 padding-bottom-40">
	<div class="grid-container">
		<div class="grid-row">
			<div class="col-xs-6 col-md-3">
				<img class="display-inline-block margin-right-5 footer-logo" src="img/general/logowhite.png" alt="Pravega logo">
				<br>
				<a class="social-icon" target="_blank" href="https://www.facebook.com/pravegaracing/"><i class="ion-social-facebook"></i></a>
				<a class="social-icon" target="_blank" href="https://twitter.com/PravegaRacing"><i class="ion-social-twitter"></i></a>
				<a class="social-icon" target="_blank" href="https://www.instagram.com/pravega_racing/"><i class="ion-social-instagram"></i></a>
			</div>
			<div class="col-xs-6 col-md-3 acmlogodiv hidden-big">
				<a class="link copyright acmvitlink" target="_blank" href="http://acmvit.com">
					<img src="img/general/acmlogo.png" class="footer-logo acmlogo">
					<div class="developedacm">&copy; Developed with <i class="fa fa-heart acmvitlinkfa" aria-hidden="true"></i> by ACM-VIT</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6">
				<br>
				<h5 class="text-color-11">Sign up</h5>
				<p>
					Want to keep informed? Join our infrequent mailing list, and you will never miss out on our upcoming events.
				</p>
				<div class="mailchimp-signup">
					<form name="subscribe_form" action="#" method="POST" id="mc-embedded-subscribe-form" class="validate form-inline" onsubmit="return validateForm()">
						<input type="email" value="" name="email" class="mailchimp-signup__input mailchimp-signup__input-light" id="mce-EMAIL" placeholder="Email address" required>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<input type="submit" value="Subscribe" name="subscribesubmit" id="mc-embedded-subscribe" class="button button__small text-color-10 mailchimp-signup__input--submit mailchimp-signup__input--submit-light">
					</form>
				</div>
				<br class="hidden-big"><br class="hidden-big">
			</div>
			<div class="col-xs-6 col-md-3 acmlogodiv hidden-small">
				<a class="link copyright acmvitlink" target="_blank" href="http://acmvit.in">
					<img src="img/general/acmlogo.png" class="footer-logo acmlogo">
					<div class="developedacm">&copy; Developed with <i class="fa fa-heart acmvitlinkfa" aria-hidden="true"></i> by ACM-VIT</div>
				</a>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="js/min/jquery-min.js"></script>

<script src="js/min/main-min.js"></script>
<script src="js/min/scripts-min.js"></script>
<script src="js/min/myjs/modernizr.js"></script>
<script type="text/javascript">
	//<![CDATA[
		$(window).on('load', function() { // makes sure the whole site is loaded 
			$('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(50).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(100).css({'overflow':'visible'});
            $("header.primary-header--fixed-nav").delay(100).fadeIn();
        });
	//]]>
</script> 
<script type="text/javascript">
	function validateForm() {
		var x = document.forms["subscribe_form"]["email"].value;
		if (x == null || x == "") {
			alert("Email must be filled out");
			return false;
		}
		return true;
	}
</script>
