<?php
   session_start();
   if($_SESSION['role']=='admin' && ($_SESSION['id'] || $_SESSION['email']))
   {

   }
   else
   {
      unset($_SESSION['role']);
      unset($_SESSION['id']);
      unset($_SESSION['email']);
      header('Location:../index.php');
   }
?>