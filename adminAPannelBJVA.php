<?php
   include("asset/connection.php");
   include("asset/insert.php");
   include("asset/select.php");
   include("asset/update.php");
   include("asset/delete.php");
//    include("test.php");

?>
<?php
    session_start();
    if(!isset($_SESSION['adminID'])){
        header("Location:adminlogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("asset/head.php");
    ?>
</head>
<body>
    <?php
       include("headder-nav-admin.php");
    ?>
    <div class="all-title-box">
		<div class="container text-center">
			<h1>Admin pannel<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
    <!-- end banner -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" id="main-container">
            <!-- banner secation -->
            <div class="container" id="banner-secation">
                <h2>Banner Seaction</h2>
                <!-- <hr> -->
                <h3>Banner-1</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="bnimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Banner/<?php echo $image1; ?>" alt="" height="200px" width="400px">
                    </div>
                </div>
                <h3>Banner-2</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="bnimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Banner/<?php echo $image2; ?>" alt="" height="200px" width="400px">
                    </div>
                </div>
                <h3>Banner-3</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="bnimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Banner/<?php echo $image3; ?>" alt="" height="200px" width="400px">   
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="submit" name="bnsubmit1" value="UPLOAD">
                        <input type="submit" name="bndelete1" value="DELETE">
                    </div>
                </div>
            </div>
            <hr>
            <!-- thoughts -->
            <div class="container" id="banner-secation">
                <h2>Banner thoughts</h2>
                <h3>thought 1</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="t1" class="message">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printt1; ?></p>
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="t2" class="message">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printt2; ?></p>
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="t3" class="message">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printt3; ?></p>
                    </div>
                </div>
                <p class="text-danger"></p>
                <p class="text-danger"></p>

                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-12">
                        <input type="submit" name="tsubmit" value="UPLOAD">
                        <input type="submit" name="tdelete" value="DELETE">
                    </div>
                </div>
            </div>
            <!-- end  -->
            <hr>
            <!-- about secation -->
            <div class="container" id="banner-secation">
                <h2>About Seaction</h2>
                <h3>About - 1(img) </h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="abimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/about/<?php echo $abimage1; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>About - 2 (img)</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="abimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/about/<?php echo $abimage2; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Director of the School</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="abimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/about/<?php echo $abimage3; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Manager of the School</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="abimg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/about/<?php echo $abimage4; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Principal of the School</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="abimg5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/about/<?php echo $abimage5; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="submit" name="absubmit1" value="UPLOAD">
                        <input type="submit" name="abdelete1" value="DELETE">
                    </div>
                </div>
            </div>
            <!-- end -->
            <hr>
            <!-- academic secation -->
            <div class="container" id="banner-secation">
                <h2>Academic Seaction</h2>
                <!-- <p>This secation only for notice</p> -->
                <h3>Affiliation</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage1; ?>" alt="" height="100px" width="200px">                        
                    </div>
                </div>
                <h3>Admission</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage2; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Curriculum</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage3; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>School Timing</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage4; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Examination&Promotion</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="IMG/acedemic/<?php echo $acimage5; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Student Details</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage6; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Withdrawal</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage7; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <h3>Subject Group</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="acimg8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/acedemic/<?php echo $acimage8; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <input type="submit" name="acsubmit1" value="UPLOAD">
                        <input type="submit" name="acdelete1" value="DELETE">    
                    </div>
                </div>
            </div>
            <!-- end -->
            <hr>
            <!-- facilities secation -->
            <div class="container" id="banner-secation">
                <h2>Facilities Seaction</h2>
                <h3>Infrastructure Details</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage1; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage2; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage3; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Smart Class</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage4; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage5; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage6; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Computer Lab</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage7; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage8; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg9">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage9; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Science Lab</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage10; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage11; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage12; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Well Furnished Library</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg13">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage13; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg14">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage14; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage15; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Children's Park</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg16">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage16; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg17">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage17; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg18">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage18; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>School Band</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg19">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage19; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg20">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage20; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg21">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage21; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>House System</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg22">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage22; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg23">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage23; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg24">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage24; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="fimg25">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Facility/<?php echo $fimage25; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="submit" name="fsubmit1" value="UPLOAD">
                        <input type="submit" name="fdelete1" value="DELETE">
                    </div>
                </div>
            </div>
            <!-- end  -->
            <hr>
            <!-- school desk secation -->
            <div class="container" id="banner-secation">
                <h2>School Desk</h2>
                <h3>School Managing Committee</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg1">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage1; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage2; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Exam Cell</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg3">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage3; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage4; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>POCSO CELL</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg5">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage5; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage6; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Grievance Cell</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg7">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage7; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage8; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>School Clubs</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg9">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage9; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage10; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Descipline Committee</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage11; ?>" alt="" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Sports and Games</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg12">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg13">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage12; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage13; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Scout & Guide</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg14">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage14; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage15; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                </div>
                <hr>
                <h3>Red Cross</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><strong>Image</strong></p>
                        <input type="file" name="simg16">
                        <p><strong>PDF</strong></p>
                        <input type="file" name="simg17">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/SchoolDesk/<?php echo $simage16; ?>" alt="" height="100px" width="200px">
                        <img src="IMG/SchoolDesk/<?php echo $simage17; ?>" alt="SORRY There is PDF file" height="100px" width="200px">
                    </div>
                    <div class="col-lg-12">
                        <br><br>
                        <input type="submit" name="sdsubmit1" value="UPLOAD">
                        <input type="submit" name="sddelete1" value="DELETE">
                    </div>
                </div>
            </div>
            <hr>
            <!-- end  -->

            <!-- gallery secation -->

            <div class="container" id="banner-secation">
                <h2 id="gallery">Gallery</h2>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage1; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage2; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg3">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage3; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg4">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage4; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg5">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage5; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage6; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg7">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage7; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg8">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage8; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg9">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage9; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg10">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage10; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage11; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg12">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage12; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg13">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage13; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg14">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage14; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg15">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage15; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg16">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage16; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg17">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage17; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg18">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage18; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg19">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage19; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg20">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage20; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg21">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage21; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg22">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage22; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg23">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage23; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg24">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage24; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg25">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage25; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg26">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage26; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg27">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage27; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="file" name="gimg28">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <img src="IMG/Gallery/<?php echo $gimage28; ?>" alt="" height="100px" width="200px">
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" name="gsubmit1" value="UPLOAD">
                        <input type="submit" name="gdelete1" value="DELETE">
                    </div>
                </div>
            </div>
            <hr>
            <!-- end -->
            <!-- News Secation -->
            <div class="container" id="banner-secation">
                <h2>News Secation</h2>
                <h3>News - 1</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news1" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews1; ?></p>
                    </div>
                </div>
                <h3>News - 2</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news2" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews2; ?></p>
                    </div>
                </div>
                <h3>News - 3</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news2" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews3; ?></p>
                    </div>
                </div>
                <h3>News - 3</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news3" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews3; ?></p>
                    </div> 
                </div>
                <h3>News - 4</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news4" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews4; ?></p>
                    </div>
                </div>
                <h3>News - 5</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news5" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews5; ?></p>
                    </div>
                </div>
                <h3>News - 6</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <input type="text" name="news6" class="message">                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-0">
                        <p><?php echo $printnews6; ?></p>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" name="nsubmit" value="UPLOAD">
                        <input type="submit" name="ndelete" value="DELETE">
                    </div>
                </div>
            </div>
            <hr>
            <!-- downloads secation -->

            <div class="container" id="banner-secation">
                <h2 id="tc">Upload Student TC</h2>
                <h3>Student Details</h3>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Roll Number:-</span>
                        <input type="text" name="rolnum" class="p-1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Student Name:-</span> 
                        <input type="text" name="stuname" class="p-1">
                    </div>
                </div>

                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Class:-</span>
                        <input type="text" name="stucls" class="p-1">
                    </div>
                <!-- </div> -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Father Name:-</span>
                        <input type="text" name="father" class="p-1">
                    </div>
                </div>
                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Mother Name:-</span> 
                        <input type="text" name="mother">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <span>Mobile Number:-</span>
                        <input type="text" name="mobilenum">
                    </div>
                </div>

                <div class="row p-0 m-0" id="banner-row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <input type="file" name="tcdoc">
                        <a href="IMG/Gallery/<?php echo $tc7; ?>">Clicl here</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <input type="submit" name="tcsubmit">
                    </div>
                </div>
                
            </div>
        <!-- student name
            roll number
            class
            father name
            mother name
            mobile number
        -->



        </div>
        

    </form>
    <!-- footer -->
    <?php
        include("footer.php");
    ?>
</body>
</html>