<?php
require 'includes/connectdb.php';
include "controllers/con_regi_users.php";

if(isset($_GET['password'])&&isset($_GET['email'])&&isset($_GET['id'])){
    
   $password = $_GET['password'] ;
   $id = $_GET['id'] ;
   $email = $_GET['email'] ;
    
   $obj1 = new con_register_user();
   $obj1->activate_user($id, $password, $email);
} else {
    header("Location:https://tukoolbetinsurance.com/registration.php");
    echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/registration.php'; </script>";
}


