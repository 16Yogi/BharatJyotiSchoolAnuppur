<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php">
        <input type="file" name= "temp1" >
        <input type="file" name= "temp2" >
        <input type="file" name= "temp3" >
        <input type="submit" name="submit">
    </form>
</body>
</html>

$img1=$_POST['temp1'];
   $img2=$_POST['temp2'];
   $img3=$_POST['temp3'];

   $sql="INSERT INTO 'banner' ('bn1','bn2','bn3') VALUES ('$img1','$img2','$img3')";
   $query=mysqli_query($connection,$sql);
   if($query){
     echo"inserted";
   }
   else{
     echo"failed";
   }
      