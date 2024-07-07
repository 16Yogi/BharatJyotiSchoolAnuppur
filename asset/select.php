<?php
       include("connection.php");
        
        $select = "SELECT * FROM `banner`";
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
            $image1 = $row['bn1'];
            $image2 = $row['bn2'];
            $image3 = $row['bn3'];

            // $image2 = $row['bn2'];
            // $image3 = $row['bn3'];

            // echo $image1;
            // echo "Image show successfully..>!";
        }
?>
<?php
        include("connection.php");
        $select = "SELECT * FROM `thoughts`";
        $qry = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($qry)){
            $printt1 = $row['t1'];
            $printt2 = $row['t2'];
            $printt3 = $row['t3'];   

      }

?>

<!-- about -->
<?php
       include("connection.php");
        
        $select = "SELECT * FROM `about`";
        
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
              $abimage1 = $row['ab1'];
              $abimage2 = $row['ab2'];
              $abimage3 = $row['ab3'];
              $abimage4 = $row['ab4'];
              $abimage5 = $row['ab5'];


            // $image2 = $row['bn2'];
            // $image3 = $row['bn3'];

            // echo $image1;
            // echo "Image show successfully..>!";
        }
?>



<!-- acedmics -->
<?php
       include("connection.php");
        
        $select = "SELECT * FROM `academics`";
        
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
              $acimage1 = $row['ac1'];
              $acimage2 = $row['ac2'];
              $acimage3 = $row['ac3'];
              $acimage4 = $row['ac4'];
              $acimage5 = $row['ac5'];
              $acimage6 = $row['ac6'];
              $acimage7 = $row['ac7'];
              $acimage8 = $row['ac8'];
        }
?>

<!-- facilities -->
<?php
       include("connection.php");
        
        $select = "SELECT * FROM `facilities`";
        
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
              $fimage1 = $row['f1'];
              $fimage2 = $row['f2'];
              $fimage3 = $row['f3'];
              $fimage4 = $row['f4'];
              $fimage5 = $row['f5'];
              $fimage6 = $row['f6'];
              $fimage7 = $row['f7'];
              $fimage8 = $row['f8'];
              $fimage9 = $row['f9'];
              $fimage10 = $row['f10'];
              $fimage11 = $row['f11'];
              $fimage12 = $row['f12'];
              $fimage13 = $row['f13'];
              $fimage14 = $row['f14'];
              $fimage15 = $row['f15'];
              $fimage16 = $row['f16'];
              $fimage17 = $row['f17'];
              $fimage18 = $row['f18'];
              $fimage19 = $row['f19'];
              $fimage20 = $row['f20'];
              $fimage21 = $row['f21'];
              $fimage22 = $row['f22'];
              $fimage23 = $row['f23'];
              $fimage24 = $row['f24'];
              $fimage25 = $row['f25'];

        }
?>


<!-- School Desk -->
<?php
       include("connection.php");
        
        $select = "SELECT * FROM `schooldesk`";
        
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
              $simage1 = $row['s1'];
              $simage2 = $row['s2'];
              $simage3 = $row['s3'];
              $simage4 = $row['s4'];
              $simage5 = $row['s5'];
              $simage6 = $row['s6'];
              $simage7 = $row['s7'];
              $simage8 = $row['s8'];
              $simage9 = $row['s9'];
              $simage10 = $row['s10'];
              $simage11 = $row['s11'];
              $simage12 = $row['s12'];
              $simage13 = $row['s13'];
              $simage14 = $row['s14'];
              $simage15 = $row['s15'];
              $simage16 = $row['s16'];
              $simage17 = $row['s17'];

        }
?>



<!-- Gallery -->
<?php
       include("connection.php");
        
        $select = "SELECT * FROM `gallery`";
        
        // $select = "SELECT * FROM `updis`";
        $query = mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
              $gimage1 = $row['g1'];
              $gimage2 = $row['g2'];
              $gimage3 = $row['g3'];
              $gimage4 = $row['g4'];
              $gimage5 = $row['g5'];
              $gimage6 = $row['g6'];
              $gimage7 = $row['g7'];
              $gimage8 = $row['g8'];
              $gimage9 = $row['g9'];
              $gimage10 = $row['g10'];
              $gimage11 = $row['g11'];
              $gimage12 = $row['g12'];
              $gimage13 = $row['g13'];
              $gimage14 = $row['g14'];
              $gimage15 = $row['g15'];
              $gimage16 = $row['g16'];
              $gimage17 = $row['g17'];
              $gimage18 = $row['g18'];
              $gimage19 = $row['g19'];
              $gimage20 = $row['g20'];
              $gimage21 = $row['g21'];
              $gimage22 = $row['g22'];
              $gimage23 = $row['g23'];
              $gimage24 = $row['g24'];
              $gimage25 = $row['g25'];
              $gimage26 = $row['g26'];
              $gimage27 = $row['g27'];
              $gimage28 = $row['g28'];

        }

?>

<?php
      include("connection.php");
      $sql = "SELECT * FROM `newssec`";
      $qry = mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($qry)){
            $printnews1 = $row['n1'];
            $printnews2 = $row['n2'];
            $printnews3 = $row['n3'];
            $printnews4 = $row['n4']; 
            $printnews5 = $row['n5'];      
            $printnews6 = $row['n6'];      
      }    
?>


<?php
      include("connection.php");
      $sql = "SELECT * FROM `tc`";
      // $sql = "SELECT * FROM `newssec`";
      $qry = mysqli_query($connection,$sql);
      while($row=mysqli_fetch_array($qry)){
            $tc1 = $row['t1'];
            $tc2 = $row['t2'];
            $tc3 = $row['t3'];
            $tc4 = $row['t4']; 
            $tc5 = $row['t5'];      
            $tc6 = $row['t6'];
            $tc7 = $row['t7'];      
      }    
?>
