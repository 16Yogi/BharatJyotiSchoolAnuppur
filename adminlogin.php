<?php
    include("asset/connection.php");

    if(isset($_POST['adminlog'])){
        $uname = $_POST['adminname'];
        $upass = $_POST['adminpass'];
        
        $bjvselect = "SELECT * FROM `admin`";
        $qry = mysqli_query($connection,$bjvselect);
        
        if($qry){
            while($row = mysqli_fetch_array($qry)){
                $dbname = $row['username'];
                $dbpass = $row['password'];
            }
            if($dbname = $uname && $dbpass = $upass){
                // echo "password done";
                session_start();
                $_SESSION['adminID']=$_POST['adminname'];
                $_SESSION['adminpass']=$_POST['adminpass'];

                header("Location: adminAPannelBJVA.php");
                // header("Location: Admin.php");
            }else{
                // echo "password failed";
                header("Location: adminlogin.php");
            }
           
        }
    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Only for Admin</title>
        <!-- CSS -->
        <link rel="stylesheet" href="Admin/css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Only for Admin</header>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <div class="field input-field">
                            <input type="text" placeholder="username" name="adminname" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password" name="adminpass" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field button-field">
                            <button name="adminlog">Login</button>
                        </div>
                    </form>
                </div>

                <!-- <div class="line"></div> -->

            </div>
        </section>
        

        <!-- JavaScript -->
        <script src="Admin/js/script.js"></script>
    </body>
</html>