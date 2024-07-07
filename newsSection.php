<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('asset/head.php');
    ?>
</head>
<body>
<div class="parallax section dbcolor p-2" id="News-section">
        <div class="container">
            <h3 id="News">Flash News:</h3>
            <hr>
            <!-- <div class="row logos" id="NewsMarquee"> -->
                <marquee behavior="" direction="" onMouseOver="this.stop()" onMouseOut="this.start()" >
                    <div class="NewsItem" style="height:60px;">
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0 m-3"><?php echo  $printnews1; ?>&nbsp &nbsp<a href="PDF/admission.pdf" class="text-warning"target="black">Click Here</a></p>
                        <!-- </div> -->
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0  m-3 "><?php echo  $printnews2; ?>&nbsp &nbsp<a href="#" class="text-warning" target="black">Click Here</a></p>
                        <!-- </div> -->
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0 m-3"><?php echo  $printnews3; ?>&nbsp &nbsp<a href="#" class="text-warning" target="black">Click Here</a></p>
                        <!-- </div> -->
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0  m-3"><?php echo  $printnews4; ?>&nbsp &nbsp<a href="#" class="text-warning" target="black">Click Here</a></p>
                        <!-- </div> -->
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0  m-3"><?php echo  $printnews5; ?>&nbsp &nbsp<a href="#" class="text-warning" target="black">Click Here</a></p>
                        <!-- </div> -->
                        <!-- <div class="col-md-6 p-0 m-0" id="newsLinks"> -->
                            <p class="text-white font-weight-bold p-0 m-3"><?php echo  $printnews6; ?>&nbsp &nbsp<a href="#" class="text-warning" target="black">Click Here</a></p>
                        <!-- </div> -->
                    </div>
                </marquee>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</body>
</html>