<?php
   include("asset/connection.php");
   include("asset/insert.php");
//    include("asset/select.php");
   include("asset/update.php");
   include("asset/delete.php");
   include("asset/connection.php");
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
//    if(isset($_POST['search'])){
//        $datatc = $_POST['rollnum'];
//        $sql = "SELECT * FROM `tc` WHERE $datatc";
//        $qry = mysqli_query($connection,$sql);
//        while($row=mysqli_fetch_array($qry)){
//            $datatc = $row['t7'];          
//        }
//    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="rollnum">
        <input type="submit" name="search">
        <a href="IMG/tc/<?php echo $datatc; ?>">Clicl here1</a>
        <a href="IMG/tc/<?php echo $tc7; ?>">Clicl here</a>

    </form>
</body>
</html>