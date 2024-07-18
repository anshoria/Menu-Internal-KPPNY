<?php
session_start();
if ($_SESSION['role'] == 'admin') {
    header("Location: ../admin/Home/profil.php");
    }else{
        header("Location: ../user/Home/profil.php");
    }  
?>