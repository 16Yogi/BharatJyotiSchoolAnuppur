<!-- 
    copyright by BHARATJYOTI ANUPPUT MP 
    YEAR- 2022 -23
    DESIGN BY - YOGENDRA/ALPNA  
 -->
<?php
   include("asset/connection.php");
   include("asset/insert.php");
   include("asset/select.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('asset/head.php');
    ?>
</head>
<body class="host_version"> 
     <!-- form -->
	<!-- Modal -->
	<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Only for Admin</h4>
			</div>
			<div class="modal-body customer-box"> -->
				<!-- Nav tabs -->
				<!-- <ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul> -->
				<!-- Tab panes -->
                <!-- Form Section -->
				<!-- <div class="tab-content">
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
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
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
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div> -->

	
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
								<!-- <a class="dropdown-item" href="#">Worksheets </a> -->
								<a class="dropdown-item" href="download.php">Exam Time Table</a>
								<a class="dropdown-item" href="download.php">Study Material</a>
								<!-- <a class="dropdown-item" href="#">TC Application</a> -->
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
			<!--<button id="btn-mt"><a class="nav-link" href="mandatory.php">MANDATORY PUBLIC DISCLOSURES</a></button>-->

		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
                <!-- <form action=""> -->
				<!-- <div id="home" class="first-section" style="background-image:url('images/b1.jpg');"> -->
				<div id="home" class="first-section" style="background-image:url('IMG/Banner/<?php echo $image1;?>');">
				<!-- </form> -->
                    <div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2><strong>Bharat Jyoti Vidyalaya</strong></h2>
                                        <h2>Samatpur,Anuppur</h2>
                                        <!-- <h2><strong>Bhart Joyti Vidyalaya</strong></h2> -->
                                        <!-- <h3 class="text-white display-4">Samatpur,Anuppur (MP)</h3> -->
                                        <p class="school-code"><span>School Code-51242</span><span>CBSC AFF. No-1031224</span></p>
										<p class="lead"><?php echo $printt1; ?></p>
											<a href="#footer-main" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
                				<!-- <div id="home" class="first-section" style="background-image:url('images/b1.jpg');"> -->
				<div id="home" class="first-section" style="background-image:url('IMG/Banner/<?php echo $image2; ?>');">
				<!-- <div id="home" class="first-section" style="background-image:url('IMG/Banner/bn3/');"> -->
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
                                        <h2><strong>Bharat Jyoti Vidyalaya</strong></h2>
                                        <h2>Samatpur,Anuppur</h2>
										<!-- <h2><strong>Bhart Joyti Vidyalaya</strong></h2> -->
                                        <!-- <h3 class="text-white display-4">Samatpur,Anuppur (MP)</h3> -->
                                        <p class="school-code"><span>School Code-12345678</span><span>CBSC AFF. No-1031224</span></p>
										<p class="lead"><?php echo $printt2; ?></p>
											<a href="#footer-main" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<!-- <div id="home" class="first-section" style="background-image:url('IMG/Banner/bn2/');"> -->
				<div id="home" class="first-section" style="background-image:url('IMG/Banner/<?php echo $image3; ?>');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
                                        <h2><strong>Bharat Jyoti Vidyalaya</strong></h2>
                                        <h2>Samatpur,Anuppur</h2>
                                        <!-- <h2><strong>Bhart Joyti Vidyalaya</strong></h2> -->
                                        <!-- <h3 class="text-white display-4">Samatpur,Anuppur (MP)</h3> -->
                                        <p class="school-code"><span>School Code-12345678</span><span>CBSC AFF. No-1031224</span></p>
										<p class="lead"><?php echo $printt3; ?></p>
											<a href="#footer-main" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead"> Jesus said, "I am the Light of the world.Whoever followsme will not walk in darkness, but will have the Light of life." (John 8:12)</p>
                    <!-- <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p> -->
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2022 Bharat Jyoti Vidyalaya Anuppur (MP)</h4>
                        <h2>Welcome To Bharat Jyoti Vidyalaya</h2>
                        <!-- <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> -->
                        <p>Bharat Jyoti VidyalayaAnuppur is run and managed by Jabalpur Diocesan Educational Societyan integral part of Catholic Diocese of Jabalpur. </p>
                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p> -->
                        <p>The School had a humble beginning in the year 2008, with 65 students and Rev. Fr. George T, being its pioneer and later continued by Fr. M.V. George.Under able leadership of Fr. Jose Antony in the year 2016 the School was upgraded to the High School. In the year 2018 Fr. Bipin Xalxo was appointed as the manager of the school and in the year 2019-20 the school was upgraded to higher secondary with Humanities, Science and Commerce subjects. The school was Switched over to Central Board of Secondary Education (CBSE) in the year 2021-22. The school is having well qualified, trained and experienced teachers. </p>

                        <!-- <a href="about.php" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="IMG/about/<?php echo $abimage1; ?>" alt="" class="img-fluid img-rounded" id="about-img">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="IMG/about/<?php echo $abimage2; ?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <!-- <h2>The standard Lorem Ipsum passage, used since the 1500s</h2> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --> 
                        <p>The moto of school “TAMASOMA JYOTIRGAMAYA” (Lead us from darkness to light) is well and appropriately affixed in the map of our country in Tri Colour, book placed at the centre with flambeau symbolising ray of knowledge glowing. The name of the school symbolises the sharing of knowledge to every citizen of our country.</p>
                        <P>The school has become well known centre of learning in the city and loved by all the people. The school is growing day by day. Administration is trying its best for reaching the school to new heights. May the ray of KNOWLEDGE enlighten every mind that comes to Bharat Jyoti Vidyalaya Anuppur.</P>
                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p> -->

                        <a href="about.php" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<!-- new secontion -->
    
<?php
   include("newsSection.php");
?>
        
<!-- end section -->

<!-- for toper student -->
    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <!-- <img src="images/t11.jpg" alt="" class="img-fluid rounded-circle"> -->
                    <h3>Topper of the School</h3>
                    <p class="lead"> “Jesus said to them, ‘Come and have breakfast.’ None of the disciples dared ask him, ‘Who are you?’ They knew it was the Lord.” <strong>(John 21:12)</strong></p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2019-20</h2>
                                <img src="images/Toper/ChandraPrakash-x.jpeg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Chandra Prakash Prajapati</strong></p>
                                <p>Class-10th</p>
                                <p>98%</p>
							</div>
                           
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2019-20</h2>
                                <img src="images/Toper/omsahu.jpg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Om Sahu</strong></p>
                                <p>Class-10th</p>
                                <p>98%</p>
                                
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2020-21</h2>
								<img src="images/Toper/AnadiXII.jpg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Anadi Yadav</strong></p>
                                <p>Class-12th</p>
                                <p>94.6%</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2020-21</h2>
                                <img src="images/Toper/Ojal-singhX.jpg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Ojal Singh</strong></p>
                                <p>Class-10th</p>
                                <p>88.8%</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2021-22</h2>
                                <img src="images/Toper/ChandraPrakashXII.jpeg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Chandra Prakash Prajapati</strong></p>
                                <p>Class-12th</p>
                                <p>97.2%</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2021-22</h2>
                                <img src="images/Toper/ChandraPrabhaX.jpeg" alt="" class="img-fluid rounded-circle" id="TopperImga">
								<p><strong>Chandra Prabha Prajapati</strong></p>
                                <p>Class-10th</p>
                                <p>96%</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">1052</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">35</p>
					<h3>Class</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">14</p>
					<h3>Years Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Fee Details</h3>
                <p>Timely payment of fees is important to maintain enrollment status and avoid late payment penalties.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <!-- <li><a class="active m-0" href="#tab1" data-toggle="pill">Monthly</a></li> -->
                            <!-- <li><a href="#tab2" data-toggle="pill">Yearly</a></li> -->
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$45</h2> -->
                                            <h3>Nursery,KG-I and KG-II</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee-</strong>2420</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Com/Lab Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Smart Class Fee-</strong>440</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>3260</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>13040</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2000</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>200</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>15240</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$59</h2> -->
                                            <h3>1st to 2nd</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee-</strong>2640</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>200</p>
                                            <p><i class="fa fa-link"></i> <strong>Smart Class Fee</strong>440</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>3680</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>14720</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2000</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>200</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>16920</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$85</h2> -->
                                            <h3>3rd to 5th</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee-</strong>2750</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>300</p>
                                            <p><i class="fa fa-link"></i> <strong>Smart Class Fee</strong>440</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>3890</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>15560</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2000</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>200</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Total-</strong>17760</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                        <div class="tab-pane active fade show" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$45</h2> -->
                                            <h3>6th to 8th</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee-</strong>2860</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>360</p>
                                            <p><i class="fa fa-link"></i> <strong>Smart Class Fee-</strong>470</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>4090</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>16360</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2000</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>300</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>18860</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$59</h2> -->
                                            <h3>9th to 10th</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee</strong>3630</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>550</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Smart Class Fee</strong>490</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>5470</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>21880</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2000</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>400</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>500</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>24780</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$85</h2> -->
                                            <h3>11th to 12th Bio & Maths</h3>
                                            <!-- <h3>Bio & Maths</h3> -->
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee</strong>4730</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>750</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>600</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Smart Class Fee</strong>550</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>6630</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>26520</p>
                                            <p><i class="fa fa-link"></i><strong>Annual Charges-</strong>2700</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>500</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>1500</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>31220</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                        <!-- pannel-3 -->
                        <div class="tab-pane active fade show" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4" id="centerTab">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <!-- <h2>$45</h2> -->
                                            <h3>11th to 12th Commerce</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-link"></i><strong>Tuition Fee</strong>4730</p>
                                            <p><i class="fa fa-link"></i><strong>Exam Fee-</strong>750</p>
                                            <p><i class="fa fa-link"></i><strong>Lab Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Comp Fee-</strong>0</p>
                                            <p><i class="fa fa-link"></i><strong>Smart Class Fee</strong>550</p>
                                            <p><i class="fa fa-link"></i><strong>Total-</strong>6030</p>
                                            <p><i class="fa fa-link"></i><strong>Installment-</strong>24120</p>
                                            <p><i class="fa fa-link"></i><strong>Annual charges-</strong>2700</p>
                                            <p><i class="fa fa-link"></i><strong>Welfare Fund-</strong>500</p>
                                            <p><i class="fa fa-link"></i><strong>Caution Deposit(Refundable)-</strong>1500</p>
                                            <p><i class="fa fa-link"></i><strong>Annual-</strong>28820</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1"> -->
                                            <!-- <h2>$59</h2> -->
                                            <!-- <h3>1st to 2nd</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>Tuition Fee</strong>2125</p>
                                            <p><i class="fa fa-rocket"></i> <strong>Annual Charges</strong>375</p>
                                            <p><i class="fa fa-database"></i> <strong>Com/Lab Fee</strong>175</p>
                                            <p><i class="fa fa-link"></i> <strong>Smart Class Fee</strong>400</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Total-</strong>3075</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Installment-</strong>3075</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>School Dev. Fee-</strong>1500</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Welfare Fund-</strong>200</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Annual-14000</strong></p>
                                        </div> -->
                                        <!-- <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1"> -->
                                            <!-- <h2>$85</h2> -->
                                            <!-- <h3>3rd to 5th</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>Tuition Fee</strong>2150</p>
                                            <p><i class="fa fa-rocket"></i> <strong>Annual Charges</strong>375</p>
                                            <p><i class="fa fa-database"></i> <strong>Com/Lab Fee</strong>300</p>
                                            <p><i class="fa fa-link"></i> <strong>Smart Class Fee</strong>400</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Total-</strong>3225</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Installment-</strong>3225</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>School Dev. Fee-</strong>1500</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Welfare Fund-</strong>200</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Caution Deposit(Refundable)-</strong>0</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Annual-14600</strong></p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://bjva.nascorptechnologies.com/Index" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div><!-- end row -->
                        </div><!-- end pane -->
                        
                        <!-- <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$477</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$485</h2>
                                            <h3>Year</h3>
                                        </div> -->
                                        <!-- <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$500</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Pay Now</span></a>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div>end row -->
                        <!-- </div>end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    <!-- testimoniol -->
    
    <?php
       include("sliderCarosel.php");
    ?>
    <!-- end testimoniol -->


    <!-- Google Map -->
    <div class="container-fulid m-0 p-0" id="index-map">
        <!-- <div class="container"> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.3339837880417!2d81.69925377477313!3d23.12146441263153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3987b286036a1bbb%3A0x7a068f2153523944!2sBHARAT%20JYOTI%20HIGHER%20SECONDARY%20SCHOOL!5e0!3m2!1sen!2sin!4v1671280886919!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="inMap"></iframe>
        <!-- </div> -->
    </div>
    
    <!-- footer -->
    <?php
       include('footer.php');
    ?>
    <!-- end footer -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>

<!-- php connection  -->
