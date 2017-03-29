<?php
session_start();
global $error;
if(!isset($error))
	$error="";
if(isset($_SESSION['user_auth']) and $_SESSION['user_auth']=="admin");else{
	$error="Please Log in first!";
	header("Location:admin.php");
}
$title="Pravega Racing - Contact us data";
include_once('includes/head.php');
function hide_this_contactus($id){
	global $con;
	$query="UPDATE contactus SET visible=0 WHERE id='$id';";
	$result=mysqli_query($con,$query);
	if($result)
		return true;
	return false;
}
function visible_this_contactus($id){
	global $con;
	$query="UPDATE contactus SET visible=1 WHERE id='$id';";
	$result=mysqli_query($con,$query);
	if($result)
		return true;
	return false;
}
function hide_this_subscribe($id){
	global $con;
	$query="UPDATE subscribe SET visible=0 WHERE id='$id';";
	$result=mysqli_query($con,$query);
	if($result)
		return true;
	return false;
}
function visible_this_subscribe($id){
	global $con;
	$query="UPDATE subscribe SET visible=1 WHERE id='$id';";
	$result=mysqli_query($con,$query);
	if($result)
		return true;
	return false;
}

if(isset($_POST['cuhide'])){
	global $success_action;
	$success=hide_this_contactus($_POST['cuhide']);
	$success_action="Hide action successfull !";
	if(!$success)
		$success_action="Hide action failed. Please Try again later.";
	header("Location:showcontactus.php");
}
if(isset($_POST['cuvisible'])){
	global $success_action;
	$success=visible_this_contactus($_POST['cuvisible']);
	$success_action="Visible action successfull !";
	if(!$success)
		$success_action="Visible action failed. Please Try again later.";
	header("Location:showcontactus.php");
}

if(isset($_POST['sbhide'])){
	global $success_action;
	$success=hide_this_subscribe($_POST['sbhide']);
	$success_action="Hide action successfull !";
	if(!$success)
		$success_action="Hide action failed. Please Try again later.";
	header("Location:showsubscribe.php");
}
if(isset($_POST['sbvisible'])){
	global $success_action;
	$success=visible_this_subscribe($_POST['sbvisible']);
	$success_action="Visible action successfull !";
	if(!$success)
		$success_action="Visible action failed. Please Try again later.";
	header("Location:showsubscribe.php");
}