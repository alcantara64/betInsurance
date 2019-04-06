<?php
include 'header.php';
include 'includes/passenc.php';
if(isset($_POST['ressetpassqord'])&&isset($_GET['email'])&&isset($_GET['id'])&&isset($_POST['cpwd'])){
    
   $password = encryptdata($_POST['ressetpassqord']) ;
   $id = $_GET['id'] ;
   $email = $_GET['email'] ;
   $cpwd = $_POST['cpwd'];
   if($password !== $cpwd){
       echo 'password doesnt match';
   }
   $obj1 = new con_register_user();
   $obj1->update_password($id, $password, $email);
} else {
    header("Location:https://tukoolbetinsurance.com/registration.php");
    echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/registration.php'; </script>";
}
?>
<div class="container">    
<div class="row">
<div class="col-sm-4 col-sm-offset-4"><form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" > 
           <div class="well">
       <div class="form-group">
          <h2><label>Confirm Password </label></h2>
</div>
             <div class="form-group">
  <label for="password">Password</label>
  <input type="password" id="password" class="form-control" placeholder="password" name="ressetpassqord" required  >
</div>
       <div class="form-group">
  <label for="confirmpassword">Confirm Password</label>
  <input type="password" id="password2" class="form-control" placeholder="retype your password" name="cpwd" required  >
</div>
               
               <script>
               function checkpassword(){
               var password = document.getElementById("password").value;
               var cfpwd =document.getElementById("password2").value;
               if(password !== cfpwd){
                  alert("The password doesnt match");
                  return false
               }
           }
               </script>
               <div class="form-group">

 <button type="submit" class="btn btn-info btn-lg">Submit</button>
    </div>
           </div></div>
   </div></div> 
