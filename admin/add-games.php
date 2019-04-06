<?php
include 'header.php';
include 'controllers/con_create_games.php';

if(isset($_POST['division'])&&isset($_POST['teams'])&&isset($_POST['odds'])&&isset($_POST['prediction'])){
   $bet_type = $_POST['division'];
   $match_type = $_POST['teams'];
   $odds  = $_POST['odds'];
   $prediction = $_POST['prediction'];
  
   
   $obj1 = new con_create_games();
   $obj1->creategames($bet_type, $match_type, $odds, $prediction);
} 
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Banker Games</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid" >
        <div class="span12">
     <div id="live_data"></div>

     <form class="form-inline" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <div class="form-group">
    <label for="email">Division:</label>
    <input type="text" name="division" placeholder="country, league or competion type" class="span4" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">teams</label>
    <input type="text" name="teams" placeholder="team e.g man u vs chelsea" class="span4" id="teams">
  </div>
   <div class="form-group">

       <input type="text" name="odds" placeholder="odds for the match" class="span4" id="odds">
  </div>
     <div class="form-group">

         <input type="text" name="prediction" placeholder="your stake" class="span4" id="prediction">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

</div>
    </div>
  </div>

</div>

<?php
include 'footer.php';
?>