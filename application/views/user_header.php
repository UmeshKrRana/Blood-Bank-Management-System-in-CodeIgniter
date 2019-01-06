<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- linking boostrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?> ">

	<!-- linking fontawesome css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?> ">

	<!-- linking custom style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/newstyle.css');?> ">
	<style>
</style>
</head>
<body>
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
						<p> Welcome to blood donation center. </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8 m-auto">
						<div class="top-bar-social">
							<a href="">
								<i class="fab fa-facebook-f"></i> 
							</a>
							<a href="">
								<i class="fab fa-twitter"></i> 
							</a>
							<a href="">
								<i class="fab fa-linkedin-in"></i> 
							</a>
							<a href="">
								<i class="fab fa-instagram"></i> 
							</a>
							<a href="">
								<i class="fab fa-google-plus-g"></i> 
							</a>
				        </div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4" id="login-div">
						
						<a href="<?php echo base_url('receiver/logout');?>" class="btn btn-outline-light btn-sm mt-2"><i class="fas fa-sign-out-alt"></i> Logout </a>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-md sticky-top border-bottom">
			<div class="container">
				<a href="<?php echo base_url();?> " class="navbar-brand"> <span class="logo"><i class="fa fa-heartbeat" aria-hidden="true"></i> Blood </span> Bank </a>

				<button type="button" class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#mynavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="<?php echo base_url();?> " class="nav-link header-nav-link"> Home </a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>welcome/blood_samples " class="nav-link header-nav-link"> Available Blood Samples </a>
						</li>
					</ul>


				</div>

			</div>

		</nav>
	
