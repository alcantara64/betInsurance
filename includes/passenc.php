<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function encryptdata($password)
{

$key = "wealthstream";
$salt = "xpertechsolutions";

$enc_pass = md5(md5($key . $password) . $salt);

return $enc_pass;
    
}

?>

