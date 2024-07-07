<?php
    include("connection.php");
    include("insert.php");

    if(isset($_POST['bndelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `banner` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }

    if(isset($_POST['tdelete'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `thoughts` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }



    if(isset($_POST['abdelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "SELECT * FROM `about` WHERE `ab1`";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }


    // academics
    if(isset($_POST['acdelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `academics` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }



    // facilities secation
    if(isset($_POST['fdelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `facilities` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }


    // school desk secation
    if(isset($_POST['sddelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `schooldesk` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }

    // gallery secation
    if(isset($_POST['gdelete1'])){
        // $sql = "DELETE FROM `banner` WHERE `bn1`='$image1'";
        $sql = "DELETE FROM `gallery` WHERE `id`=0";
        // DELETE FROM `banner` WHERE `banner`.`id` = 0
        $qry = mysqli_query($connection,$sql);
        if($qry){
            // echo "Deleted";
        }else{
            // echo "Not deleted...!";
        }
    }


?>