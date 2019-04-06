<?php

include 'header.php';
include 'controllers/con_claim_insurance.php';

if (isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['account_number'])&&isset($_POST['bank_address'])&&isset($_POST['amount'])&&isset($_POST['currency'])&&isset($_POST['betting_capital'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $account_number = trim($_POST['account_number']);
    $bank_address = trim($_POST['bank_address']);
    $amount = trim($_POST['amount']);
    $currency = trim($_POST['currency']);
    
    $obj1 = new con_claim_insurance();
    $obj1->create_insurance($first_name, $last_name, $account_number, $bank_address, $amount, $currency);
}
?>
<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashbord</a><a href="#" class="current">Claim insurance</a> </div>
  <h1>Claim Insurance</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Claim Insurance Detalis</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit=" return false" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" name="first_name" class="span11" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" name="last_name" class="span11" placeholder="Last name" />
              </div>
            </div>
                <div class="control-group">
              <label class="control-label">Bank Name</label>
              <div class="controls">
                <input type="text" name="bank_name"  class="span11" placeholder="Bank Name"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Acount Number</label>
              <div class="controls">
                <input type="text" name="account_number"  class="span11" placeholder="Account number"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Bank Address</label>
              <div class="controls">
                <input type="text" name="bank_address" class="span11" placeholder="input your bank address" />
              </div>
            </div>
              
            <div class="control-group">
              <label class="control-label">Amount</label>
              <div class="controls">
                <input type="text" name="amount" class="span11" />
            </div>
              </div>
            <div class="control-group">
              <label class="control-label">Currency</label>
              <div class="controls">
                <input type="text" name="currency" class="span11" placeholder="Input your Currency" />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Betting Capital</label>
              <div class="controls">
                <input type="text" name="betting_capital" class="span11" placeholder="Input your betting Capital" />
              </div>
            </div>
              <div class="form-actions" style=" <?php if (!isset($_SESSION['claiminsurance'])) {
     echo $_SESSION['claiminsurance'];
} else {
echo '<script>alert("not set");</script>' ;   
}?>">
              <button type="hidden" class="btn btn-success pull-right">Submit</button>
            </div>
          </form>
        </div>
      </div>
      
      
    </div>
    
  </div>
 
</div></div>


