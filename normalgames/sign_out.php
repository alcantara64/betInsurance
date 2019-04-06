<?php

session_start();
 
 unset($_SESSION['email']);
  unset($_SESSION['user_id']);
  unset($_SESSION['have_subcribed']);
 session_destroy();

$msg="destroy";
 header('location:../login.php?logout='.$msg); 







