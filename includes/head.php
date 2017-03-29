<?php

global $dbServer;
        $dbServer = 'localhost'; //Define database server host
        global $dbUsername;
		$dbUsername = 'root'; //Define database username
		global $dbPassword;
		$dbPassword = 'secret'; //Define database password

		global $adminPassword;
		$adminPassword=$dbPassword;//this is the password to see the subscribe and contactus table data
		
		global $dbName;
		$dbName = 'pravega'; //Define database name
		global $con;
		//$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		//******uncomment above line*****/
		
		function insert_contact($name,$email,$message){	
			date_default_timezone_set("Asia/Kolkata");
			$insdate=date("d/m/Y");
			$insdate.=" ".date("h:i:sa");
			global $con;
			$name=mysqli_real_escape_string($con,$name);
			$email=mysqli_real_escape_string($con,$email);
			$message=mysqli_real_escape_string($con,$message);
			$query="INSERT INTO contactus(name,email,message,insdate) values('{$name}','{$email}','{$message}','{$insdate}');";
			$result=mysqli_query($con,$query);
			if($result)
				return true;
			return false;
		}
		function insert_subscribe($email){		
			date_default_timezone_set("Asia/Kolkata");
			$insdate=date("d/m/Y");
			$insdate.=" ".date("h:i:sa");
			global $con;
			$email=mysqli_real_escape_string($con,$email);
			$query="INSERT INTO subscribe(email,insdate) values('{$email}','{$insdate}');";
			$result=mysqli_query($con,$query);
			if($result)
				return true;
			return false;
		}
		?>
		<?php
		if(isset($_POST['subscribesubmit']))
		{
			$success_subs=false;
			$email = $_POST['email'];
			global $auth;
			global $basesubscribe;
			include_once('mongodb.php');
			$url=$basesubscribe."?email=".$email."&auth=".$auth;
			$response=file_get_contents($url);
			$response=json_decode($response);
			if($response->success==1)
				$success_subs=true;
			if($success_subs)
			{
				?>
				<script type="text/javascript">
					alert("Thank you for subscribing. We will get back to you soon.");
					window.location.assign("redirect_to.php?location="+window.location.href);
				</script>
				<?php
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Sorry, there was an error. Please try calling or emailing us.");
					window.location.assign("redirect_to.php?location="+window.location.href);
				</script>
				<?php
			}
		}
		?>
		<?php
		if(!isset($title) || empty($title))
			$title="Pravega Racing | VIT Vellore";
		?>
		<!doctype html>
		<html class="no-js" lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title><?php echo $title;?></title>
			<link rel="stylesheet" href="css/mycss/preloader.css">
			<meta property="og:audio" content="" />
			<!-- Open graph meta tags -->
			<meta property="og:title" content="Pravega Racing" />
			<meta property="og:type" content="website" />
			<meta property="og:url" content="http://www.pravegaracing.com" />
			<meta property="og:image" content="http://pravegaracing.com/img/general/icon.png" />
			<meta property="og:description" content="We are a team of engineers who seek to enhance the learning experience of the student community at VIT University by implementation of engineering fundamentals within the context of building a formula style Racecar." />
			<meta property="og:author" content="Pravega Racing, ACM VIT, Harshit Kedia">
			<meta property="og:keywords" content="Pravega,Racing,VIT,Car,F1,SAE,Formula,Student,Germany,India,ACM,Harshit,Kedia">
			<meta property="og:locale" content="en_GB" />
			<meta property="og:locale:alternate" content="" />
			<meta property="og:locale:alternate" content="" />
			<meta property="og:site_name" content="Pravega Racing" />
			<meta name="description" content="We are a team of engineers who seek to enhance the learning experience of the student community at VIT University by implementation of engineering fundamentals within the context of building a formula style Racecar.">
			<meta name="author" content="Pravega Racing, ACM VIT, Harshit Kedia">
			<meta name="keywords" content="Pravega,Racing,VIT,Car,F1,SAE,Formula,Student,Germany,India,ACM,ACM VIT,Harshit,Kedia,Vinit Bodhwani">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="apple-touch-icon" href="apple-touch-icon.html">
			<link rel="icon" href="http://pravegaracing.com/img/general/icon.png">
			<link href="css/mycss/fonts_google_apis.css" rel="stylesheet">
			<link rel="stylesheet" href="css/fonts.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/sub-page-styles.css">
			<link rel="stylesheet" type="text/css" href="css/mycss/mybootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/mycss/mystyle.css" />