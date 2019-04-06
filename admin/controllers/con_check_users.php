<?php
include 'models/mod_check_users.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_checkactive_users{
    
     public function showactiveusers()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_checkactive_users();
            
            
        $result = $obj1->showactiveusers();
        
            $message = '';
                    if ($result->num_rows > 0)
                    { 
                        
                                                $message .= '<div class="widget-content nopadding">
                        
<table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>First_name</th>
                  <th>Last_name</th>
                  <th>Date Joined</th>
                  <th>Country</th>
                  <th>Email</th>
                  <th>phone</th>
                  <th>State</th>
                  <th>amount</th>
                </tr>
              </thead>
              <tbody>';
                       $count = 1;
                       
                        while ($row = $result->fetch_assoc())
                        {
                            
                         
                    
                      
                           
                             $message .=  '<tr class="gradeX"><td>'.$count.'</td><td>'.$row["first_name"].' </td><td>'.$row["last_name"].'</td><td>'.$row["date_joined"].'</td><td>'.$row["country"].'</td><td>'.$row["email"].'</td><td>'.$row["phone"].'</td><td>'.$row["state"].'</td><td>'.$row["amount"].'</td></tr>';
                         
                             
                             
                              $count ++;
                        
                        
                             }
                          $message .= "</tbody>
                    </table>
      </div>";                         
                          return $message;
                    
                                       



                   
          } else {
                                               $message = "No match to show contact admin";
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
 
}
    




