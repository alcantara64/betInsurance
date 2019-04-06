<?php require 'header.php'; 

include 'controllers/con_regi_users.php';
include 'includes/passenc.php';

?>

<?php 

if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['dob'])&&isset($_POST['email'])&&isset($_POST['sex'])&&isset($_POST['phonenumber'])&&isset($_POST['address'])
        &&isset($_POST['city'])&&isset($_POST['country'])&&isset($_POST['state'])&&isset($_POST['password'])){
      $first_name= trim($_POST['first_name']);
      $last_name = trim($_POST['last_name']);
      $email = strtolower( trim($_POST['email']));
      $sex = trim($_POST['sex']);
      $phone = trim($_POST['phonenumber']);  
      $address = ($_POST['address']);
      $city = trim($_POST['city']);
      $state = trim($_POST['state']);
      $country =  trim($_POST['country']);
      $password = $_POST['password'];
      $dob= trim($_POST['dob']);
//      $name_betting_comp=$_POST['betting_comapny'];
//      $betting_capital =$_POST['betting_capital'];
//      $name_betting_site= $_POST['website_bet']; 
      $passwordenc = encryptdata($password); 
//      $insurancecapital = ($betting_capital * 10)/100;
      
      $obj1 = new con_register_user();
      $obj1->create_events($first_name, $last_name, $email, $passwordenc, $country, $state, $address, $city, $dob, $phone);
}

?>
<script>
  fbq('track', 'CompleteRegistration');
</script>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div class="container">    
          <div class="form-group">
          <h2><label>Sign Up</label></h2>
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
   
<div class="row">
    <div class="col-sm-6">
        
        <div class="panel panel-warning">
  <div class="panel-heading"><b>Personal Information</b></div>
  <div class="panel-body">
     <div class="form-group">
  <label for="firstname">First Name</label>
  <input type="text" class="form-control" placeholder="First Name" name="first_name" required value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];} ?>">
</div>
      <div class="form-group">
                               <label for="LastName"> Last Name</label>
                               <input type="text" class="form-control" placeholder="Enter Last name" name="last_name"  required value="<?php if(isset($_POST['donationamount'])){echo $_POST['donationamount'];} ?>" >
                              </div>
      <div class="form-group">
                               <label for="dob"> Date of Birth</label>
                               <input type="date" class="form-control" name="dob"   required value="<?php if(isset($_POST['dob'])){echo $_POST['dob'];} ?>" >
                              </div>
          
   
         
  <div class="form-group">
  <label for="phonenumber">Phone Number</label>
  <input type="text" class="form-control" placeholder="070**/080**/090**" name="phonenumber" minlength="10" maxlength="15" required value="<?php if(isset($_POST['phonenumber'])){echo $_POST['phonenumber'];} ?>">
</div>   
          
         
           
          
      <div class="form-group">
                            <label for="bank">Sex</label>
                               <select class="form-control" name="sex" required>
                                   <option value="">Select Sex</option>
                                   <option>Male</option>
                                   <option>Female</option>
                                   <option>other</option>
                               </select>
                        </div> 
        </div>
</div>     
</div>
     <div class="col-sm-6">
         <div class="panel panel-warning">
  <div class="panel-heading"><b>Residential information</b></div>
  <div class="panel-body">
      <div class="form-group">
                               <label for="account_number2">Address</label>
                               <input type="text" class="form-control" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>" placeholder="Enter Address" name="address" id="address" required>
                              </div> 
      <div class="form-group">
  <label for="city">City</label>
  <input type="text" class="form-control" placeholder="Enter your City" name="city" required value="<?php if(isset($_POST['city'])){echo $_POST['city'];} ?>">
</div>
      <div class="form-group">
  <label for="firstname">Sate</label>
  <input type="text" class="form-control" placeholder="Enter your State" name="state" required value="<?php if(isset($_POST['state'])){echo $_POST['state'];} ?>">
</div>
      
          
                           <div class="form-group">
                               <label for="country">Country</label>
                               <input type="text" class="form-control" value="<?php if(isset($_POST['country'])){echo $_POST['country'];} ?>" placeholder="Enter your Contry of residence" name="country" id="country" required>
                              </div>
                             
                             
                               
  </div>
         </div>
           
     

    
        
        <div class="panel panel-warning">
  <div class="panel-heading"><b>Login Information</b></div>
  <div class="panel-body">
     
       <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
</div>
          <div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" placeholder="Your Password" name="password" required value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>">
</div>
            <div class="form-group">
  <label for="password2">Re-Password</label>
  <input type="password" class="form-control" placeholder="Re-type your Password" name="password2" required value="<?php if(isset($_POST['password2'])){echo $_POST['password2'];} ?>">
</div>
   
         
    
          
        
           
          
      
</div>     
</div>
 </div>    
</div>
<div class="form-group">
    <label>
       <input type="checkbox" class=""  name="terms" required value="<?php if(isset($_POST['terms'])){echo $_POST['terms'];} ?>"> 
    I have read and agreed to the <a href="terms.php" target="_blank">Terms and Condition</a></span>
    </label>
</div>    
         <div class="form-group">
<div class="g-recaptcha" data-sitekey="6Lcf4EEUAAAAAP8RWBvE3r6mfHku1IaL9yHjuBcb"></div>
             <button type="submit" class="btn btn-success btn-md">Sign up</button>
    </div>
</div>
</form>
<?php require 'footer.php'; ?>