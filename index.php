<?php 
//functionality of the overall site

if(empty($_GET['action'])) {
	$action = 'home';
}
else {
	$action = $_GET['action'];
}

//Open the home page controller
if($action == 'home') {
	include('controll/home.php');
}

if($action == 'about') {
	include('controll/about.php');
}

//Open the menu controller
else if($action == 'menu') {
	include('controll/menu.php');
}

//Open the specials controller
else if($action == 'events') {
	include('controll/events.php');
}

//Open the photo gallery controller
else if($action == 'photo') {
	include('controll/photo.php');
}

//Open the contact controller
else if($action == 'contact') {
	include('controll/contact.php');
}

//Open the employment application controller
else if($action == 'empApp') {
	include('controll/employment.php');
}

?>