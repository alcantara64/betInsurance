<?php

include 'header.php';
include 'controllers/con_check_users.php';
?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Active Users</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        
        
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Active users</h5>
          </div>
          <?php
          $obj1 = new con_checkactive_users();
          echo $result = $obj1->showactiveusers();
          
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>