<?php 
   
      session_start();
      session_destroy();


       require '../helpers/checkLogin.php';

      header("Location: http://localhost/week2/AdminLTE-3.0.5/Admin/login.php");




?>