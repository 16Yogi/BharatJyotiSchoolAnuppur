<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	   include('asset/head.php');
	?>
	
</head>
<body>
		 <!-- form -->
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Only for Admin</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<!-- <ul class="nav nav-tabs"> -->
					<!-- <li><a class="active" href="#Login" data-toggle="tab">Login</a></li> -->
					<!-- <li><a href="#Registration" data-toggle="tab">Registration</a></li> -->
				<!-- </ul> -->
				<!-- Tab panes -->
                <!-- Form Section -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Username" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-dark btn-radius btn-brd grd1">
										Submit
									</button>
									<!-- <a class="for-pwd" href="javascript:;">Forgot your password?</a> -->
								</div>
							</div>
						</form>
					</div>
					<!-- <div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div> -->
							<!-- </div> -->
						<!-- </form> -->
					<!-- </div> -->
				</div>
			</div>
		</div>
	  </div>
	</div>

<!-- Start header -->
    <header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/Logo.png" alt="" />
                    <!-- <h1>Bharat Jyoti HSS</h1> -->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="">Banner</a></li>
						<li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
						<li class="nav-item"><a class="nav-link" href="#academic">Academic</a></li> 
						<li class="nav-item"><a class="nav-link" href="#facilities">Facilities</a></li> 
						<li class="nav-item"><a class="nav-link" href="#schooldesk">school DEsk</a></li> 
						<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li> 
						<li class="nav-item"><a class="nav-link" href="#tc">Upload TC</a></li>
						
						<!-- <li name="logout" class="nav-item"><a href="" class="nav-link">Log out</a></li> -->
                       <li class="nav-item">
					        <form action="" method="POST">
					             <button name="logout" class=>logout</button>
					        </form>
					   </li>
						<?php
                            if(isset($_POST['logout'])){
                                session_destroy();
                                header("Location:adminlogin.php");
                            }
                        ?>
					</ul>
					<!--   -->
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
</body>
</html>