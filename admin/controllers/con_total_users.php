<?php
include 'models/mod_total_users.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class con_checktotalactive_users{
    
     public function showtotalsactiveusers()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_checktotalactive_users();
            
            
        $result = $obj1->showtotalsactiveusers();
        
            $message = '';
                    if ($result->num_rows > 0)
                    {      
                        if ($row =$result->fetch_assoc()) {
                            
             $message = $row['total_numberof_users'];
         }          
                          return $message;
                    
                                       


                             
                  

                   
          } else {
                                               $message = 0;
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
 

 public function totalamount()
    {        
    //put your code here     
        try {             

           $obj1 = new mod_checktotalactive_users();
            
            
        $result = $obj1->totalamount();
        
            $message = '';
                    if ($result->num_rows > 0)
                    {      
                        if ($row =$result->fetch_assoc()) {
                            
             $message = $row['total_amount'];
         }          
                          return $message;
                    
                                       


                             
                  

                   
          } else {
                                               $message = 0;
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
public function totalnewuser()
   {        
    //put your code here     
        try {             

           $obj1 = new mod_checktotalactive_users();
            
            
        $result = $obj1->totalnewuser();
        
            $message = '';
                    if ($result->num_rows > 0)
                    {      
                        if ($row =$result->fetch_assoc()) {
                            
             $message = $row['total_new'];
         }          
                          return $message;
                    
                                       


                             
                  

                   
          } else {
                                               $message = 0;
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
 public function highestinsurance()
{        
    //put your code here     
        try {             

           $obj1 = new mod_checktotalactive_users();
            
            
        $result = $obj1->highestinsurance();
        
            $message = '';
                    if ($result->num_rows > 0)
                    {      
                        if ($row =$result->fetch_assoc()) {
                            
             $message = $row['max_amount'];
         }          
                          return $message;
                    
                                       


                             
                  

                   
          } else {
                                               $message = 0;
                                                 return $message;
                                            }
        }
          catch(Exception $e) {
   
 $message = $e->getMessage();
   return $message;
}
}
}

 