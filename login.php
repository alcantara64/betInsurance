<?php require 'header.php'; 
include 'controllers/con_login.php';

?>

<?php 
if(isset($_POST['lost_email']))
{
            $email = strtolower(trim($_POST['lost_email']));
          
            $obj1 = new con_login();
          $obj1->ressetpassword($email);
} 

if(isset($_POST['emaillogin']) && isset($_POST['passwordlogin']))
{
            $email = strtolower(trim($_REQUEST['emaillogin']));
            $password = $_POST['passwordlogin'];
            
            $obj1 = new con_login();
             
             $obj1->confirmLogin($email, $password);
} 


?>

<br><br>
  
<div class="container">    
<div class="row">
    <div class="col-sm-4">

</div>
    <div class="col-sm-4"><form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" > 
           <div class="well">
       <div class="form-group">
          <h2><label>SIGN IN</label></h2>
</div>
             <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" placeholder="Type your Email" name="emaillogin" required value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" >
</div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" placeholder="Password" name="passwordlogin" required="required" >
</div>
               <div style="color:red;  <?php 
        if(!isset($_SESSION["loginerrormessage"]))
          {
             echo "display:none;"; 
          } 
          else
          {
              echo "";
          } 
          ?>
                               
">
        <label> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><?php if(isset($_SESSION["loginerrormessage"])){ echo '<script type="text/javascript">alert("'.$_SESSION["loginerrormessage"].'");</script>'; echo $_SESSION["loginerrormessage"]; unset($_SESSION["loginerrormessage"]);} ?></label>                            
                           </div>
          <div class="form-group">
              <a href="" data-toggle="modal" data-target="#myModal">I have Forgotten my Password?</a> 

</div>
  <div class="form-group">
<div class="g-recaptcha" data-sitekey="6Lcf4EEUAAAAAP8RWBvE3r6mfHku1IaL9yHjuBcb"></div>
 <button type="submit" class="btn btn-success btn-md">Sign in</button>
    </div>
               <div style="<?php 
        if(!isset($_SESSION["success"]))
          {
             echo "display:none;"; 
          } 
          else
          {
              echo "";
          } 
          ?>" class="alert alert-success">
  <?php if(isset($_SESSION["success"])){ echo '<script type="text/javascript">alert("'.$_SESSION["success"].'");</script>'; echo $_SESSION["success"]; unset($_SESSION["success"]);} ?>
</div>       
   </div>
        </form>
    </div>
    <div class="col-sm-4">
   </div>    

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reser password</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
          <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" placeholder="input the Email you registered with " name="lost_email" required value="" >
</div>
                <div class="form-group">
 <button type="submit" class="btn btn-success btn-md">Submit</button>
    </div>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    </div> 
  

<?php require 'footer.php'; ?>
