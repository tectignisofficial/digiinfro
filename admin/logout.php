<?php
include("include/config.php");
session_start();
$dnk=session_destroy();
if($dnk){
    header("location:../adminlogin/index.php");
}else{
    header("location:index.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}
?>