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
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="ACADEMICS.php" id="dropdown-a" data-toggle="dropdown">Academics</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="ACADEMICS.php">Admissions</a>
								<a class="dropdown-item" href="ACADEMICS.php">Affiliation </a>
								<a class="dropdown-item" href="ACADEMICS.php">Curriculum </a>
								<a class="dropdown-item" href="ACADEMICS.php">School Timing </a>
								<a class="dropdown-item" href="teachers.php">Staff/Faculty </a>
								<a class="dropdown-item" href="ACADEMICS.php">Examination&Promotion</a>
								<a class="dropdown-item" href="ACADEMICS.php">Students' Details</a>
								<a class="dropdown-item" href="ACADEMICS.php">Withdrawal</a>
								<a class="dropdown-item" href="ACADEMICS.php">Subject Group </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="SchoolFaculities.php" id="dropdown-a" data-toggle="dropdown">Facilities</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="SchoolFaculities.php">Infrastructrue Details </a>
								<a class="dropdown-item" href="SchoolFaculities.php">Smart Class </a>
								<a class="dropdown-item" href="SchoolFaculities.php">Computer Lab </a>
								<a class="dropdown-item" href="SchoolFaculities.php">Science Labs </a>
								<a class="dropdown-item" href="SchoolFaculities.php">Well Furnished Library </a>
								<a class="dropdown-item" href="SchoolFaculities.php">Children's Park</a>
								<a class="dropdown-item" href="SchoolFaculities.php">School Band </a>
								<a class="dropdown-item" href="SchoolFaculities.php">House System</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">School Desk</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="schoolDesk.php">School Managing Committee</a>
								<a class="dropdown-item" href="schoolDesk.php">Exam Cell</a>
								<a class="dropdown-item" href="schoolDesk.php">POCSO</a>
								<a class="dropdown-item" href="schoolDesk.php">Grievance </a>
								<a class="dropdown-item" href="schoolDesk.php">Clubs</a>
								<a class="dropdown-item" href="schoolDesk.php">Discipline </a>
								<a class="dropdown-item" href="schoolDesk.php">Sports & Games</a>
								<a class="dropdown-item" href="schoolDesk.php">Scout & Guide</a>
								<a class="dropdown-item" href="schoolDesk.php">Red Cross</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li> 
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="download.php" id="dropdown-a" data-toggle="dropdown">Downloads</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="download.php">Circular </a>
								<a class="dropdown-item" href="download.php">Calendar</a>
								<a class="dropdown-item" href="download.php">Syllabus</a>
								<a class="dropdown-item" href="download.php">Book List</a>
								<a class="dropdown-item" href="download.php">Exam Time Table</a>
								<a class="dropdown-item" href="download.php">Study Material</a>
								<a class="dropdown-item" href="downlodTC.php">Download TC</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#footer-main">Contact</a></li>
						<li>
                            <button id="btn-mt"><a class="nav-link" href="mandatory.php">MANDATORY PUBLIC DISCLOSURES</a></button>
                        </li>
					</ul>

					<!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login</span></a></li>
                    </ul> -->
				</div>
			</div>
			<!-- <button id="btn-mt"><a class="nav-link" href="mandatory.php">MANDATORY PUBLIC DISCLOSURES</a></button>
			<li class="nav-item d-block p-0 m-0"><a class="nav-link" href="mandatory.php">MANDATORY PUBLIC DISCLOSURES</a></li>  -->

		</nav>
	</header>
	<!-- End header -->
</body>
</html>



<!-- 
    copyright by BHARATJYOTI ANUPPUT MP 
    YEAR- 2022 -23
    DESIGN BY - YOGENDRA/ALPNA  
-->