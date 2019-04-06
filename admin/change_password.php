<?php
include 'header.php';
 include 'controllers/con_change_password.php'; 
 try
{
if (isset($_POST['password'])&& isset($_POST['new_password']))
{
    $obj1 = new con_change_password();
    $result = $obj1->changepassword($_POST["password"], $_POST['new_password'], $_SESSION["email"]);

          echo '<script type="text/javascript">alert("'.$result.'");</script>';      
   
}
}
 catch(Exception $e) {   
  
    echo 'Message: ' .$e->getMessage();
   echo '<script type="text/javascript">alert("'.$e->getMessage();'");</script>';
}
?>
<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="current">Change password</a>  </div>
  <h5>Change Password</h5>
</div>
<div class="container-fluid">
<div class="row-fluid">
<div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Change Password</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Old password</label>
              <div class="controls">
                  <input type="text" class="span11" name="password" placeholder="old passsword" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">New password :</label>
              <div class="controls">
                  <input type="password" class="span11" name="new_password" placeholder="New Password" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Confirm Password</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Change</button>
            </div>
          </form>
        </div>
      </div>
      
      
    </div>
    </div>
</div>
    </div>