<?php
   include("asset/connection.php");
   include("asset/insert.php");
//    include("asset/select.php");
   include("asset/update.php");
   include("asset/delete.php");
   include("asset/connection.php");

   if(isset($_POST['search'])){
    $datatc = $_POST['rollnum'];
    $sql = "SELECT t7 FROM tc WHERE t1='$datatc'";
    $qry = mysqli_query($connection,$sql);

    while($row=mysqli_fetch_array($qry)){
        $datatc = $row['t7'];
    }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
	   include('asset/head.php');
	?> 
</head>

<body class="host_version">
    <!-- start headder -->
    <?php
       include('headder-nav.php');
    ?>
    <!-- end headder -->

    <div class="all-title-box">
		<div class="container text-center">
			<h1>Download Your TC</h1>
		</div>
	</div>
        
    
    <div class="container" id="tcdownload">
        <div class="tcform">
            <h1>Only for student</h1>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <input type="text" name="rollnum" placeholder="enter your Enrollment">
                <input type="submit" name="search">
                <iframe src="IMG/tc/<?php echo $datatc; ?>" frameborder="0"></iframe>
                <a href="IMG/tc/<?php echo $datatc; ?>">Download Now</a>
            </form>
        </div>
    </div>

    <?php
	   include('footer.php');
	?>

    <!-- <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a> -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
