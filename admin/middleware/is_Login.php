<?php
session_start();  

if( isset($_SESSION['userid']) ){
    header("location: Home.php");
} 
?>