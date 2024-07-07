<?php
   

   include("connection.php");
// banner section
  if(isset($_POST['bnsubmit1'])){
     
     $bnimg1 = $_FILES['bnimg1']['name'];
     $bnimg1TMP = $_FILES['bnimg1']['tmp_name'];
     $folder1 = "IMG/Banner/";
     move_uploaded_file($bnimg1TMP,$folder1.$bnimg1);


     $bnimg2 = $_FILES['bnimg2']['name'];
     $bnimg2TMP = $_FILES['bnimg2']['tmp_name'];
     $folder2 = "IMG/Banner/";
     move_uploaded_file($bnimg2TMP,$folder2.$bnimg2);


     $bnimg3 = $_FILES['bnimg3']['name'];
     $bnimg3TMP = $_FILES['bnimg3']['tmp_name'];
     $folder3 = "IMG/Banner/";
     move_uploaded_file($bnimg3TMP,$folder3.$bnimg3);


     $sql = "INSERT INTO `banner`(`bn1`,`bn2`,`bn3`) VALUES ('$bnimg1','$bnimg2','$bnimg3')";
     $qry = mysqli_query($connection,$sql);
     
     // $datain = "Data inserted..!";
     // $datano = "Data not inserted..!";
     if($qry){
          // $a = "file uploaded";
          // $datain;
          // $datain = print("File uploaded..!");
          // $a = "File uploaded";
     }else{
          // $datano;
          // $b = "Sorry file not uploaded..!";
          // echo "file not uploaded";
     }     
  } 

//    thoughts sections
   
   if(isset($_POST['tsubmit'])){
        $though1 = $_POST['t1'];
        $though2 = $_POST['t2'];
        $though3 = $_POST['t3'];

        $sql = "INSERT INTO `thoughts`(`t1`, `t2`, `t3`) VALUES ('$though1','$though2','$though3')";
        if(mysqli_query($connection,$sql)){
          // $datain = echo "THoughts inserted";
          // $datain = print_r("Thoughts updated..!");
        }else{
          // $datanoin = print_r("Sorry...Thoughts not updated..!");
        }

   }

//   about section
  if(isset($_POST['absubmit1'])){
     $abimg1 = $_FILES['abimg1']['name'];
     $abimg1TMP = $_FILES['abimg1']['tmp_name'];
     $folder1 = "IMG/about/";
     move_uploaded_file($abimg1TMP,$folder1.$abimg1);


     $abimg2 = $_FILES['abimg2']['name'];
     $abimg2TMP = $_FILES['abimg2']['tmp_name'];
     $folder2 = "IMG/about/";
     move_uploaded_file($abimg2TMP,$folder2.$abimg2);


     $abimg3 = $_FILES['abimg3']['name'];
     $abimg3TMP = $_FILES['abimg3']['tmp_name'];
     $folder3 = "IMG/about/";
     move_uploaded_file($abimg3TMP,$folder3.$abimg3);

     $abimg4 = $_FILES['abimg4']['name'];
     $abimg4TMP = $_FILES['abimg4']['tmp_name'];
     $folder4 = "IMG/about/";
     move_uploaded_file($abimg4TMP,$folder4.$abimg4);

     $abimg5 = $_FILES['abimg5']['name'];
     $abimg5TMP = $_FILES['abimg5']['tmp_name'];
     $folder5 = "IMG/about/";
     move_uploaded_file($abimg5TMP,$folder5.$abimg5);


     $sql = "INSERT INTO `about`(`ab1`, `ab2`, `ab3`, `ab4`, `ab5`) VALUES ('$abimg1','$abimg2','$abimg3','$abimg4','$abimg5')";
     $qry = mysqli_query($connection,$sql);

     if($qry){
          // echo "File uploaded";
     }else{
          // echo "file not uploaded";
     }
  } 


//   academic

if(isset($_POST['acsubmit1'])){
     $acimg1 = $_FILES['acimg1']['name'];
     $acimg1TMP = $_FILES['acimg1']['tmp_name'];
     $folder1 = "IMG/acedemic/";
     move_uploaded_file($acimg1TMP,$folder1.$acimg1);


     $acimg2 = $_FILES['acimg2']['name'];
     $acimg2TMP = $_FILES['acimg2']['tmp_name'];
     $folder2 = "IMG/acedemic/";
     move_uploaded_file($acimg2TMP,$folder2.$acimg2);


     $acimg3 = $_FILES['acimg3']['name'];
     $acimg3TMP = $_FILES['acimg3']['tmp_name'];
     $folder3 = "IMG/acedemic/";
     move_uploaded_file($acimg3TMP,$folder3.$acimg3);

     $acimg4 = $_FILES['acimg4']['name'];
     $acimg4TMP = $_FILES['acimg4']['tmp_name'];
     $folder4 = "IMG/acedemic/";
     move_uploaded_file($acimg4TMP,$folder4.$acimg4);

     $acimg5 = $_FILES['acimg5']['name'];
     $acimg5TMP = $_FILES['acimg5']['tmp_name'];
     $folder5 = "IMG/acedemic/";
     move_uploaded_file($acimg5TMP,$folder5.$acimg5);

     $acimg6 = $_FILES['acimg6']['name'];
     $acimg6TMP = $_FILES['acimg6']['tmp_name'];
     $folder6 = "IMG/acedemic/";
     move_uploaded_file($acimg6TMP,$folder6.$acimg6);

     $acimg7 = $_FILES['acimg7']['name'];
     $acimg7TMP = $_FILES['acimg7']['tmp_name'];
     $folder7 = "IMG/acedemic/";
     move_uploaded_file($acimg7TMP,$folder7.$acimg7);

     $acimg8 = $_FILES['acimg8']['name'];
     $acimg8TMP = $_FILES['acimg8']['tmp_name'];
     $folder8 = "IMG/acedemic/";
     move_uploaded_file($acimg8TMP,$folder8.$acimg8);


     $sql = "INSERT INTO `academics`(`ac1`, `ac2`, `ac3`, `ac4`, `ac5`, `ac6`, `ac7`, `ac8`) VALUES ('$acimg1','$acimg2','$acimg3','$acimg4','$acimg5','$acimg6','$acimg7','$acimg8')";
     $qry = mysqli_query($connection,$sql);

     if($qry){
          // echo "File uploaded";
     }else{
          // echo "file not uploaded";
     }
  } 


//   facilities

if(isset($_POST['fsubmit1'])){
     $fimg1 = $_FILES['fimg1']['name'];
     $fimg1TMP = $_FILES['fimg1']['tmp_name'];
     $folder1 = "IMG/Facility/";
     move_uploaded_file($fimg1TMP,$folder1.$fimg1);

     $fimg2 = $_FILES['fimg2']['name'];
     $fimg2TMP = $_FILES['fimg2']['tmp_name'];
     $folder2 = "IMG/Facility/";
     move_uploaded_file($fimg2TMP,$folder2.$fimg2);

     $fimg3 = $_FILES['fimg3']['name'];
     $fimg3TMP = $_FILES['fimg3']['tmp_name'];
     $folder3 = "IMG/Facility/";
     move_uploaded_file($fimg3TMP,$folder3.$fimg3);

     $fimg4 = $_FILES['fimg4']['name'];
     $fimg4TMP = $_FILES['fimg4']['tmp_name'];
     $folder4 = "IMG/Facility/";
     move_uploaded_file($fimg4TMP,$folder4.$fimg4);

     $fimg5 = $_FILES['fimg5']['name'];
     $fimg5TMP = $_FILES['fimg5']['tmp_name'];
     $folder5 = "IMG/Facility/";
     move_uploaded_file($fimg5TMP,$folder5.$fimg5);

     $fimg6 = $_FILES['fimg6']['name'];
     $fimg6TMP = $_FILES['fimg6']['tmp_name'];
     $folder6 = "IMG/Facility/";
     move_uploaded_file($fimg6TMP,$folder6.$fimg6);

     $fimg7 = $_FILES['fimg7']['name'];
     $fimg7TMP = $_FILES['fimg7']['tmp_name'];
     $folder7 = "IMG/Facility/";
     move_uploaded_file($fimg7TMP,$folder7.$fimg7);

     $fimg8 = $_FILES['fimg8']['name'];
     $fimg8TMP = $_FILES['fimg8']['tmp_name'];
     $folder8 = "IMG/Facility/";
     move_uploaded_file($fimg8TMP,$folder8.$fimg8);

     $fimg9 = $_FILES['fimg9']['name'];
     $fimg9TMP = $_FILES['fimg9']['tmp_name'];
     $folder9 = "IMG/Facility/";
     move_uploaded_file($fimg9TMP,$folder9.$fimg9);

     $fimg10 = $_FILES['fimg10']['name'];
     $fimg10TMP = $_FILES['fimg10']['tmp_name'];
     $folder10 = "IMG/Facility/";
     move_uploaded_file($fimg10TMP,$folder10.$fimg10);

     $fimg11 = $_FILES['fimg11']['name'];
     $fimg11TMP = $_FILES['fimg11']['tmp_name'];
     $folder11 = "IMG/Facility/";
     move_uploaded_file($fimg11TMP,$folder11.$fimg11);

     $fimg12 = $_FILES['fimg12']['name'];
     $fimg12TMP = $_FILES['fimg12']['tmp_name'];
     $folder12 = "IMG/Facility/";
     move_uploaded_file($fimg12TMP,$folder12.$fimg12);

     $fimg13 = $_FILES['fimg13']['name'];
     $fimg13TMP = $_FILES['fimg13']['tmp_name'];
     $folder13 = "IMG/Facility/";
     move_uploaded_file($fimg13TMP,$folder13.$fimg13);

     $fimg14 = $_FILES['fimg14']['name'];
     $fimg14TMP = $_FILES['fimg14']['tmp_name'];
     $folder14 = "IMG/Facility/";
     move_uploaded_file($fimg14TMP,$folder14.$fimg14);

     $fimg15 = $_FILES['fimg15']['name'];
     $fimg15TMP = $_FILES['fimg15']['tmp_name'];
     $folder15 = "IMG/Facility/";
     move_uploaded_file($fimg15TMP,$folder15.$fimg15);

     $fimg16 = $_FILES['fimg16']['name'];
     $fimg16TMP = $_FILES['fimg16']['tmp_name'];
     $folder16 = "IMG/Facility/";
     move_uploaded_file($fimg16TMP,$folder16.$fimg16);

     $fimg17 = $_FILES['fimg17']['name'];
     $fimg17TMP = $_FILES['fimg17']['tmp_name'];
     $folder17 = "IMG/Facility/";
     move_uploaded_file($fimg17TMP,$folder17.$fimg17);

     $fimg18 = $_FILES['fimg18']['name'];
     $fimg18TMP = $_FILES['fimg18']['tmp_name'];
     $folder18 = "IMG/Facility/";
     move_uploaded_file($fimg18TMP,$folder18.$fimg18);

     $fimg19 = $_FILES['fimg19']['name'];
     $fimg19TMP = $_FILES['fimg19']['tmp_name'];
     $folder19 = "IMG/Facility/";
     move_uploaded_file($fimg19TMP,$folder19.$fimg19);

     $fimg20 = $_FILES['fimg20']['name'];
     $fimg20TMP = $_FILES['fimg20']['tmp_name'];
     $folder20 = "IMG/Facility/";
     move_uploaded_file($fimg20TMP,$folder20.$fimg20);

     $fimg21 = $_FILES['fimg21']['name'];
     $fimg21TMP = $_FILES['fimg21']['tmp_name'];
     $folder21 = "IMG/Facility/";
     move_uploaded_file($fimg21TMP,$folder21.$fimg21);

     $fimg22 = $_FILES['fimg22']['name'];
     $fimg22TMP = $_FILES['fimg22']['tmp_name'];
     $folder22 = "IMG/Facility/";
     move_uploaded_file($fimg22TMP,$folder22.$fimg22);

     $fimg23 = $_FILES['fimg23']['name'];
     $fimg23TMP = $_FILES['fimg23']['tmp_name'];
     $folder23 = "IMG/Facility/";
     move_uploaded_file($fimg23TMP,$folder23.$fimg23);

     $fimg24 = $_FILES['fimg24']['name'];
     $fimg24TMP = $_FILES['fimg24']['tmp_name'];
     $folder24 = "IMG/Facility/";
     move_uploaded_file($fimg24TMP,$folder24.$fimg24);

     $fimg25 = $_FILES['fimg25']['name'];
     $fimg25TMP = $_FILES['fimg25']['tmp_name'];
     $folder25 = "IMG/Facility/";
     move_uploaded_file($fimg25TMP,$folder25.$fimg25);

     $sql = "INSERT INTO `facilities`(`f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`) VALUES ('$fimg1','$fimg2','$fimg3','$fimg4','$fimg5','$fimg6','$fimg7','$fimg8','$fimg9','$fimg10','$fimg11','$fimg12','$fimg13','$fimg14','$fimg15','$fimg16','$fimg17','$fimg18','$fimg19','$fimg20','$fimg21','$fimg22','$fimg23','$fimg24','$fimg25')";
    
     $qry = mysqli_query($connection,$sql);

     if($qry){
          // echo "File uploaded";
     }else{
          // echo "file not uploaded";
     }
  } 



// --------------------------------


//   SchoolDesk

if(isset($_POST['sdsubmit1'])){
     $simg1 = $_FILES['simg1']['name'];
     $simg1TMP = $_FILES['simg1']['tmp_name'];
     $folder1 = "IMG/SchoolDesk/";
     move_uploaded_file($simg1TMP,$folder1.$simg1);

     $simg2 = $_FILES['simg2']['name'];
     $simg2TMP = $_FILES['simg2']['tmp_name'];
     $folder2 = "IMG/SchoolDesk/";
     move_uploaded_file($simg2TMP,$folder2.$simg2);

     $simg3 = $_FILES['simg3']['name'];
     $simg3TMP = $_FILES['simg3']['tmp_name'];
     $folder3 = "IMG/SchoolDesk/";
     move_uploaded_file($simg3TMP,$folder3.$simg3);

     $simg4 = $_FILES['simg4']['name'];
     $simg4TMP = $_FILES['simg4']['tmp_name'];
     $folder4 = "IMG/SchoolDesk/";
     move_uploaded_file($simg4TMP,$folder4.$simg4);

     $simg5 = $_FILES['simg5']['name'];
     $simg5TMP = $_FILES['simg5']['tmp_name'];
     $folder5 = "IMG/SchoolDesk/";
     move_uploaded_file($simg5TMP,$folder5.$simg5);

     $simg6 = $_FILES['simg6']['name'];
     $simg6TMP = $_FILES['simg6']['tmp_name'];
     $folder6 = "IMG/SchoolDesk/";
     move_uploaded_file($simg6TMP,$folder6.$simg6);

     $simg7 = $_FILES['simg7']['name'];
     $simg7TMP = $_FILES['simg7']['tmp_name'];
     $folder7 = "IMG/SchoolDesk/";
     move_uploaded_file($simg7TMP,$folder7.$simg7);

     $simg8 = $_FILES['simg8']['name'];
     $simg8TMP = $_FILES['simg8']['tmp_name'];
     $folder8 = "IMG/SchoolDesk/";
     move_uploaded_file($simg8TMP,$folder8.$simg8);

     $simg9 = $_FILES['simg9']['name'];
     $simg9TMP = $_FILES['simg9']['tmp_name'];
     $folder9 = "IMG/SchoolDesk/";
     move_uploaded_file($simg9TMP,$folder9.$simg9);

     $simg10 = $_FILES['simg10']['name'];
     $simg10TMP = $_FILES['simg10']['tmp_name'];
     $folder10 = "IMG/SchoolDesk/";
     move_uploaded_file($simg10TMP,$folder10.$simg10);

     $simg11 = $_FILES['simg11']['name'];
     $simg11TMP = $_FILES['simg11']['tmp_name'];
     $folder11 = "IMG/SchoolDesk/";
     move_uploaded_file($simg11TMP,$folder11.$simg11);

     $simg12 = $_FILES['simg12']['name'];
     $simg12TMP = $_FILES['simg12']['tmp_name'];
     $folder12 = "IMG/SchoolDesk/";
     move_uploaded_file($simg12TMP,$folder12.$simg12);    

     $simg13 = $_FILES['simg13']['name'];
     $simg13TMP = $_FILES['simg13']['tmp_name'];
     $folder13 = "IMG/SchoolDesk/";
     move_uploaded_file($simg13TMP,$folder13.$simg13);

     $simg14 = $_FILES['simg14']['name'];
     $simg14TMP = $_FILES['simg14']['tmp_name'];
     $folder14 = "IMG/SchoolDesk/";
     move_uploaded_file($simg14TMP,$folder14.$simg14);

     $simg15 = $_FILES['simg15']['name'];
     $simg15TMP = $_FILES['simg15']['tmp_name'];
     $folder15 = "IMG/SchoolDesk/";
     move_uploaded_file($simg15TMP,$folder15.$simg15);

     $simg16 = $_FILES['simg16']['name'];
     $simg16TMP = $_FILES['simg16']['tmp_name'];
     $folder16 = "IMG/SchoolDesk/";
     move_uploaded_file($simg16TMP,$folder16.$simg16);

     $simg17 = $_FILES['simg17']['name'];
     $simg17TMP = $_FILES['simg17']['tmp_name'];
     $folder17 = "IMG/SchoolDesk/";
     move_uploaded_file($simg17TMP,$folder17.$simg17);

     // $simg18 = $_FILES['simg18']['name'];
     // $simg18TMP = $_FILES['simg18']['tmp_name'];
     // $folder18 = "IMG/";
     // move_uploaded_file($simg18TMP,$folder18.$simg18);

     $sql = "INSERT INTO `schooldesk`(`s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`) VALUES ('$simg1','$simg2','$simg3','$simg4','$simg5','$simg6','$simg7','$simg8','$simg9','$simg10','$simg11','$simg12','$simg13','$simg14','$simg15','$simg16','$simg17')";
     $qry = mysqli_query($connection,$sql);
     if($qry){
          // echo "File uploaded";
     }else{
          // echo "file not uploaded";
     }
  } 





  
//   Gallery

if(isset($_POST['gsubmit1'])){
     $gimg1 = $_FILES['gimg1']['name'];
     $gimg1TMP = $_FILES['gimg1']['tmp_name'];
     $folder1 = "IMG/Gallery/";
     move_uploaded_file($gimg1TMP,$folder1.$gimg1);

     $gimg2 = $_FILES['gimg2']['name'];
     $gimg2TMP = $_FILES['gimg2']['tmp_name'];
     $folder2 = "IMG/Gallery/";
     move_uploaded_file($gimg2TMP,$folder2.$gimg2);

     $gimg3 = $_FILES['gimg3']['name'];
     $gimg3TMP = $_FILES['gimg3']['tmp_name'];
     $folder3 = "IMG/Gallery/";
     move_uploaded_file($gimg3TMP,$folder3.$gimg3);

     $gimg4 = $_FILES['gimg4']['name'];
     $gimg4TMP = $_FILES['gimg4']['tmp_name'];
     $folder4 = "IMG/Gallery/";
     move_uploaded_file($gimg4TMP,$folder4.$gimg4);

     $gimg5 = $_FILES['gimg5']['name'];
     $gimg5TMP = $_FILES['gimg5']['tmp_name'];
     $folder5 = "IMG/Gallery/";
     move_uploaded_file($gimg5TMP,$folder5.$gimg5);

     $gimg6 = $_FILES['gimg6']['name'];
     $gimg6TMP = $_FILES['gimg6']['tmp_name'];
     $folder6 = "IMG/Gallery/";
     move_uploaded_file($gimg6TMP,$folder6.$gimg6);

     $gimg7 = $_FILES['gimg7']['name'];
     $gimg7TMP = $_FILES['gimg7']['tmp_name'];
     $folder7 = "IMG/Gallery/";
     move_uploaded_file($gimg7TMP,$folder7.$gimg7);

     $gimg8 = $_FILES['gimg8']['name'];
     $gimg8TMP = $_FILES['gimg8']['tmp_name'];
     $folder8 = "IMG/Gallery/";
     move_uploaded_file($gimg8TMP,$folder8.$gimg8);

     $gimg9 = $_FILES['gimg9']['name'];
     $gimg9TMP = $_FILES['gimg9']['tmp_name'];
     $folder9 = "IMG/Gallery/";
     move_uploaded_file($gimg9TMP,$folder9.$gimg9);

     $gimg10 = $_FILES['gimg10']['name'];
     $gimg10TMP = $_FILES['gimg10']['tmp_name'];
     $folder10 = "IMG/Gallery/";
     move_uploaded_file($gimg10TMP,$folder10.$gimg10);

     $gimg11 = $_FILES['gimg11']['name'];
     $gimg11TMP = $_FILES['gimg11']['tmp_name'];
     $folder11 = "IMG/Gallery/";
     move_uploaded_file($gimg11TMP,$folder11.$gimg11);

     $gimg12 = $_FILES['gimg12']['name'];
     $gimg12TMP = $_FILES['gimg12']['tmp_name'];
     $folder12 = "IMG/Gallery/";
     move_uploaded_file($gimg12TMP,$folder12.$gimg12);

     $gimg13 = $_FILES['gimg13']['name'];
     $gimg13TMP = $_FILES['gimg13']['tmp_name'];
     $folder13 = "IMG/Gallery/";
     move_uploaded_file($gimg13TMP,$folder13.$gimg13);

     $gimg14 = $_FILES['gimg14']['name'];
     $gimg14TMP = $_FILES['gimg14']['tmp_name'];
     $folder14 = "IMG/Gallery/";
     move_uploaded_file($gimg14TMP,$folder14.$gimg14);

     $gimg15 = $_FILES['gimg15']['name'];
     $gimg15TMP = $_FILES['gimg15']['tmp_name'];
     $folder15 = "IMG/Gallery/";
     move_uploaded_file($gimg15TMP,$folder15.$gimg15);

     $gimg16 = $_FILES['gimg16']['name'];
     $gimg16TMP = $_FILES['gimg16']['tmp_name'];
     $folder16 = "IMG/Gallery/";
     move_uploaded_file($gimg16TMP,$folder16.$gimg16);

     $gimg17 = $_FILES['gimg17']['name'];
     $gimg17TMP = $_FILES['gimg17']['tmp_name'];
     $folder17 = "IMG/Gallery/";
     move_uploaded_file($gimg17TMP,$folder17.$gimg17);

     $gimg18 = $_FILES['gimg18']['name'];
     $gimg18TMP = $_FILES['gimg18']['tmp_name'];
     $folder18 = "IMG/Gallery/";
     move_uploaded_file($gimg18TMP,$folder18.$gimg18);

     $gimg19 = $_FILES['gimg19']['name'];
     $gimg19TMP = $_FILES['gimg19']['tmp_name'];
     $folder19 = "IMG/Gallery/";
     move_uploaded_file($gimg19TMP,$folder19.$gimg19);

     $gimg20 = $_FILES['gimg20']['name'];
     $gimg20TMP = $_FILES['gimg20']['tmp_name'];
     $folder20 = "IMG/Gallery/";
     move_uploaded_file($gimg20TMP,$folder20.$gimg20);

     $gimg21 = $_FILES['gimg21']['name'];
     $gimg21TMP = $_FILES['gimg21']['tmp_name'];
     $folder21 = "IMG/Gallery/";
     move_uploaded_file($gimg21TMP,$folder21.$gimg21);

     $gimg22 = $_FILES['gimg22']['name'];
     $gimg22TMP = $_FILES['gimg22']['tmp_name'];
     $folder22 = "IMG/Gallery/";
     move_uploaded_file($gimg22TMP,$folder22.$gimg22);

     $gimg23 = $_FILES['gimg23']['name'];
     $gimg23TMP = $_FILES['gimg23']['tmp_name'];
     $folder23 = "IMG/Gallery/";
     move_uploaded_file($gimg23TMP,$folder23.$gimg23);

     $gimg24 = $_FILES['gimg24']['name'];
     $gimg24TMP = $_FILES['gimg24']['tmp_name'];
     $folder24 = "IMG/Gallery/";
     move_uploaded_file($gimg24TMP,$folder24.$gimg24);

     $gimg25 = $_FILES['gimg25']['name'];
     $gimg25TMP = $_FILES['gimg25']['tmp_name'];
     $folder25 = "IMG/Gallery/";
     move_uploaded_file($gimg25TMP,$folder25.$gimg25);

     $gimg26 = $_FILES['gimg26']['name'];
     $gimg26TMP = $_FILES['gimg26']['tmp_name'];
     $folder26 = "IMG/Gallery/";
     move_uploaded_file($gimg26TMP,$folder26.$gimg26);

     $gimg27 = $_FILES['gimg27']['name'];
     $gimg27TMP = $_FILES['gimg27']['tmp_name'];
     $folder27 = "IMG/Gallery/";
     move_uploaded_file($gimg27TMP,$folder27.$gimg27);

     $gimg28 = $_FILES['gimg28']['name'];
     $gimg28TMP = $_FILES['gimg28']['tmp_name'];
     $folder28 = "IMG/Gallery/";
     move_uploaded_file($gimg28TMP,$folder28.$gimg28);

     $sql = "INSERT INTO `gallery`(`g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `g11`, `g12`, `g13`, `g14`, `g15`, `g16`, `g17`, `g18`, `g19`, `g20`, `g21`, `g22`, `g23`, `g24`, `g25`, `g26`, `g27`, `g28`) VALUES ('$gimg1','$gimg2','$gimg3','$gimg4','$gimg5','$gimg6','$gimg7','$gimg8','$gimg9','$gimg10','$gimg11','$gimg12','$gimg13','$gimg14','$gimg15','$gimg16','$gimg17','$gimg18','$gimg19','$gimg20','$gimg21','$gimg22','$gimg23','$gimg24','$gimg25','$gimg26','$gimg27','$gimg28')";
     
     $qry = mysqli_query($connection,$sql);

     if($qry){
          // echo "File uploaded";
     }else{
          // echo "file not uploaded";
     }
  } 
  

//   NEWS SECTION
  if(isset($_POST['nsubmit'])){
     $news1 = $_POST['news1'];
     $news2 = $_POST['news2'];
     $news3 = $_POST['news3'];
     $news4 = $_POST['news4'];
     $news5 = $_POST['news5'];
     $news6 = $_POST['news6'];


     $sql ="INSERT INTO `newssec`(`n1`, `n2`, `n3`, `n4`, `n5`, `n6`) VALUES ('$news1','$news2','$news3','$news4','$news5','$news6')";
     $qry = mysqli_query($connection,$sql);
     if($qry){
          // echo "News inserted...!";
     }else{
          // echo "News not inserted...!";
     }
  }


//   student tc 
if (isset($_POST['tcsubmit'])) {
     $roll = $_POST['rolnum'];
     $stuname = $_POST['stuname'];
     $class = $_POST['stucls'];
     $father = $_POST['father'];
     $mother = $_POST['mother'];
     $mobile = $_POST['mobilenum'];
     // $tcdata = $_POST['tcdoc']['name'];


     $tcdata = $_FILES['tcdoc']['name'];
     $tcdataTMP = $_FILES['tcdoc']['tmp_name'];
     $folder = "IMG/tc/";
     // move_uploaded_file($gimg28TMP,$folder28.$gimg28);
     move_uploaded_file($tcdataTMP,$folder.$tcdata);


     $sql = "INSERT INTO `tc`(`t1`, `t2`, `t3`, `t4`, `t5`, `t6`,`t7`) VALUES ('$roll','$stuname','$class','$father','$mother','$mobile','$tcdata ')";
     $result = $connection->query($sql);
     if ($result == TRUE) {
     //   echo "New record created successfully.";
     }
     else{
     //   echo "Error";
     //   $con->close(); 
     }
   }
?>


<!-- 
    copyright by BHARATJYOTI ANUPPUT MP 
    YEAR- 2022 -23
    DESIGN BY - YOGENDRA/ALPNA  
 -->