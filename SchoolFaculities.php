
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
<body>
    <!-- headder -->
    <?php
        include('headder-nav.php');
    ?>
    <!-- end headder -->

    <div class="all-title-box">
		<div class="container text-center">
			<h1>Facilities of School
			    <span class="m_1">What you have said in the dark will be heard in the daylight, and what you have whispered in the ear in the inner rooms will be proclaimed from the roofs. <strong>Luke 12:3</strong></span>
			</h1>
		</div>
	</div>
    
    <!--  -->
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Facilities</h3>
            </div><!-- end title -->

            <hr class="invis">  
            <h4 id="facilities-name">Infrastructrue Details</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage1; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Buildings</a></h2>
							</div>
							<div class="course-desc">
								<p>Building infrastructure encompasses the physical structures and systems that support a building's functionality, safety, and comfort, such as its foundation, walls, plumbing, electrical and HVAC systems, elevators, and fire safety features. It is important for creating a safe and healthy environment for building occupants, and requires ongoing maintenance and upgrades.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage2; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Facilities</a></h2>
							</div>
							<div class="blog-desc">
								<p>Facilities infrastructure refers to the physical structures and systems that support the operations of a facility, such as equipment, utilities, communication systems, and security measures. It is essential for creating a functional and secure environment for facility users, and requires ongoing maintenance and upgrades to ensure its effectiveness and efficiency.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage3; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Technology</a></h2>
							</div>
							<div class="course-desc">
								<p>Technology infrastructure refers to the hardware, software, and communication systems that support the use of technology in an organization or society. It includes computer networks, servers, databases, software applications, and internet connectivity. Effective technology infrastructure is critical for enabling communication, information sharing and upgrades to keep pace with rapidly evolving technology.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->
            </div><!-- end row -->			
			

			<hr class="hr3"> 
			

            <h4 id="facilities-name">Smart Class</h4>
            <div class="row"> 
				<div class="col-lg-4 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage4; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Interactive Learning</a></h2>
							</div>
							<div class="course-desc">
								<p>Smart classes utilize multimedia tools such as audio, video, and graphics to engage students in the learning process, making it more interactive and engaging.</p>
								<!-- <p>“How you learn and what you learn will determine what you become.” Next Education Smart Class, the latest development of technology helps our children to understand the concepts in a way that they have never understood before.</p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage5; ?>" alt="" class="img-fluid">
						</div>		
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Increased Learning Outcomes</a></h2>
							</div>
							<div class="course-desc">
								<p>Smart classes are designed to improve learning outcomes by providing access to a variety of educational resources, which can help students develop a deeper understanding of the subject matter and improve their critical thinking and problem-solving skills.</p>
							    <!-- <p>“How you learn and what you learn will determine what you become.” Next Education Smart Class, the latest development of technology helps our children to understand the concepts in a way that they have never understood before.</p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage6; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Cost-Effective</a></h2>
							</div>
							<div class="course-desc">
							    <p>“How you learn and what you learn will determine what you become.” Next Education Smart Class, the latest development of technology helps our children to understand the concepts in a way that they have never understood before.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->

			<hr class="hr3"> 

            <h4 id="facilities-name">Computer Lab</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage7; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Equipment</a></h2>
							</div>
							<div class="course-desc">
								<p>A computer lab should be equipped with up-to-date hardware and software that meet the needs of its users. This may include desktops, laptops, printers, scanners, and other peripherals. The lab should also have a reliable network infrastructure and internet connectivity.</p>
								<!-- <p>The school has a well maintained computer lab. All the machines are networked and have access to internet. This computer lab provides fast and easy access to vast amount of information in a variety of formats.</p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage8; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Environment</a></h2>
							</div>
							<div class="blog-desc">
								<p>The physical environment of the lab should be comfortable and conducive to learning and productivity. This may include proper lighting, temperature control, ergonomic furniture, and soundproofing if necessary. It's also important to ensure that the lab is safe and secure, with appropriate measures in place to protect against theft or damage.</p>
							    <!-- <p>The school has a well maintained computer lab. All the machines are networked and have access to internet. This computer lab provides fast and easy access to vast amount of information in a variety of formats.</p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage9; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Support</a></h2>
							</div>
							<div class="course-desc">
								<p>A computer lab should have trained staff who can provide technical support and assistance to users. This may include troubleshooting hardware and software issues, helping with software installation and updates, and providing guidance and instruction on how to use various programs and tools.</p>
							    <!-- <p>The school has a well maintained computer lab. All the machines are networked and have access to internet. This computer lab provides fast and easy access to vast amount of information in a variety of formats.</p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->		

			<hr class="hr3"> 

            <h4 id="facilities-name">Science Lab</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage10; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Bio Lab</a></h2>
							</div>
							<div class="course-desc">
								<p>A bio lab is a place where students can explore the wonders of living organisms through scientifi experimentation. Bio labs provide student with hands-on experience in the study of living organisms.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage11; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Physics Lab</a></h2>
							</div>
							<div class="blog-desc">
								<p>Pysics labs offer students the opportunity to explore the fundamental principles of the physical world through experimentation. Physics labs often use specialized equipment,to perform experiments and collect data.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage12; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Chemistry Lab</a></h2>
							</div>
							<div class="course-desc">
								<p>Chemistry labs provide students with hands-on experience in the studdy of chemical properties,reactions, and phenomena. Chemistry labs often use specialized equipment, such as spectrophotometers etc.</p>
							</div>
						</div>
						<!-- <div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div> -->
					</div>
                </div><!-- end col -->
            </div><!-- end row -->		

			<hr class="hr3"> 


            <h4 id="facilities-name">Well Furnished Library</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage13; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Collection</a></h2>
							</div>
							<div class="course-desc">
								<p>A library's primary purpose is to provide access to a wide variety of information and resources. Therefore, a library should have a well-curated and diverse collection of books, journals, newspapers, magazines, audio-visual materials, and other resources that meet the needs of its users. The collection should be regularly updated and expanded to keep up with changing needs and interests.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage14; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Space</a></h2>
							</div>
							<div class="blog-desc">
								<p>The physical space of the library should be designed to facilitate learning, research, and study. This may include comfortable seating, tables, and desks for individual and group study, as well as private study rooms or spaces for quiet work. Additionally, the library should be equipped with appropriate technology, such as computers, printers, and Wi-Fi, to support research and learning.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage15; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Services</a></h2>
							</div>
							<div class="course-desc">
								<p>A library should offer a range of services to support its users' research and learning needs. This may include reference services, such as assistance with research and finding information, as well as instructional services, such as workshops and training on how to use library resources. Additionally, the library should offer programs and events that promote reading, lifelong learning, and community engagement.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->	
            
			<hr class="hr3"> 
            

            <h4 id="facilities-name">Children's Park</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage16; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Safety</a></h2>
							</div>
							<div class="course-desc">
								<p>One of the most important factors in a children's park is safety. The park should be designed with safety in mind, with age-appropriate equipment and surfaces that are soft and cushioned to prevent injury. The park should be well-maintained and regularly inspected to ensure that all equipment is in good condition and free of hazards. </p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage17; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Fun and Education</a></h2>
							</div>
							<div class="blog-desc">
								<p>A children's park should be fun and engaging for kids. The park should have a variety of play equipment, such as swings, slides, climbing structures, and interactive play areas, that encourage imaginative and active play. The park should also provide opportunities for educational play, such as interactive displays and educational signage that teach children about nature, animals, and other interesting topics.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage18; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Accessibility</a></h2>
							</div>
							<div class="course-desc">
								<p> A children's park should be accessible to all children, regardless of ability. The park should be designed with inclusive features, such as wheelchair-accessible paths, play equipment that is accessible to children with disabilities, and sensory-rich play areas for children with sensory processing issues. Additionally, the park should be located in an area that is easily accessible by public transportation and have ample parking for families who drive.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->		

			<hr class="hr3"> 


            <h4 id="facilities-name">School Band</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage19; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Musicianship</a></h2>
							</div>
							<div class="course-desc">
								<p>The primary goal of a school band is to develop the musical skills of its members. This includes teaching them to read music, play their instrument with proper technique, and perform as a group. The band should provide regular practice sessions and instruction that is tailored to the skill level of each member. </p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage20; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Teamwork</a></h2>
							</div>
							<div class="blog-desc">
								<p>Playing in a band requires a high degree of teamwork and cooperation. The band should encourage a supportive and collaborative environment in which members work together to achieve a common goal. This may involve teaching students to listen to one another, communicate effectively, and take turns leading and following</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage21; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Performance</a></h2>
							</div>
							<div class="course-desc">
								<p>A school band should provide opportunities for its members to perform in front of live audiences. This may include school concerts, parades, community events, and other public performances. These performances help to build confidence and poise, as well as provide a sense of accomplishment and recognition for the hard work that the students have put in.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->		

			<hr class="hr3"> 

            <h4 id="facilities-name">House System</h4>
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage22; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Green House</a></h2>
							</div>
							<div class="course-desc">
								<p>A school greenhouse is a valuable tool for teaching students about plants and their role in the environment. It can provide hands-on learning experiences in plant propagation, growth, and care. A greenhouse can also be used to grow fresh produce for the school cafeteria and as a resource for science experiments and research projects.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage23; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Blue House</a></h2>
							</div>
							<div class="blog-desc">
								<!-- <p></p> -->
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage24; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Red House</a></h2>
							</div>
							<div class="course-desc">
								<p>In some schools, the student body is divided into smaller groups known as "houses". The red house is one of these groups, and it often competes with other houses in events like sports, quizzes, and arts. This creates a sense of community and friendly rivalry among the students, fostering school spirit and teamwork.</p>
							</div>
						</div>
					</div>
                </div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12" id="yellow">
                    <div class="course-item">
						<div class="image-blog">
							<img src="IMG/Facility/<?php echo $fimage25; ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Yellow House</a></h2>
							</div>
							<div class="course-desc">
								<p>In some schools, the student body is divided into smaller groups known as "houses". The yellow house is one of these groups, and it often competes with other houses in events like sports, quizzes, and arts. This creates a sense of community and friendly rivalry among the students, fostering school spirit and teamwork.</p>
								<!-- <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p> -->
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->		
        </div><!-- end container -->
    </div><!-- end section -->
    <!--  -->
    <?php
        include('footer.php');
    ?>
</body>
</html>