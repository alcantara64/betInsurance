 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                 require 'includes/connectdb.php'; 
               include 'mycrons/suspend_accounts.php';
               
                echo "<br><br><br><br><br>-------------------Susoend user starts-----------------------<br><br><br><br><br>";
               $obj2 = new suspend_acounts();
               echo $obj2->suspend_users();
              
               
               echo "<br><br><br><br><br>-------------------Susoend user Ends-----------------------<br><br><br><br><br>";
                
        ?>
    </body>
</html>
