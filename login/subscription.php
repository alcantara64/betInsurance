<?php 
session_start();
if (!isset($_SESSION["email"])) {
     header('location:../login.php');
    echo "<script type='text/javascript'> document.location = 'https://tukoolbetinsurance.com/login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subscription</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script src="js/jquery.bootstrap3-money-field.js" type="text/javascript"></script>
  <style>
    .currencyinput {
    border: 1px inset #ccc;
}
.currencyinput input {
    border: 0;
}
  </style>
  <!-- Facebook Pixel Code -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '174524736647472');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=174524736647472&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body style=" //background-image: url('../images/paymentbackgroundtint.png'); ">
    <script>
  fbq('track', 'Purchase');
</script>

  
  <!-- Trigger the modal with a button -->
  
   
  <br><br>
  <div class="container">
      <div class="row">
          <div class="col-sm-offset-2   col-sm-8"> <?php echo $_SESSION["loginsuccessmessage"];?></div>
          </div>
  <div class="row">
      
      <div class="col-sm-6 col-xs-12 col-sm-offset-2">
  
          <section class="panel panel-success">
  <header class="panel-heading">
   <h5 class="panel-title">SUBSCRIBE</h5>
  </header>
  <div class="panel-body">
   <p>Pay 10% of your betting capital to have access to view our banker games and to insure your capital </p>
 
          
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Click to Subscribe</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
         
          <h4 class="modal-title">INSURE YOUR BETTING CAPITAL</h4>
        </div>
        <div class="modal-body">
            <form  >
         <div class="form-group row">
  <div class="col-sm-4">
    
      
     
    <label for="betting_capital"> BETTING CAPITAL</label>
    <input class="form-control amount" id="betting_capital" name="betting_capital"  type="number">
    <span style="color: red" id="beterror"></span><span style="color: green" id="betsuccess"></span>
  </div>
  <div class="col-sm-6">
    <label for="insurance_fee">INSURANCE FEE</label>
    <input class="form-control amount" id="insurance_fee" disabled   type="text">
    <p class="warning"></p>
   
  </div>
     <input class="form-control disabled" id="user_id" value="<?php echo $_SESSION["user_id"];?>"  type="hidden">         
  <input class="form-control disabled" id="phone" value="<?php echo $_SESSION["phone"];?>"  type="hidden">
  <input class="form-control disabled" disabled id="email" value="<?php echo $_SESSION['email'];?>" type="hidden">
   <input class="form-control disabled" id="phone" value="<?php echo $_SESSION["first_name"];?>"  type="hidden">
  <input class="form-control disabled" disabled id="email" value="<?php echo $_SESSION['last_name'];?>" type="hidden">          
  <div class="col-sm-4">
     
       <label for="ex2"></label>
       <button type="button" id="pay" class="form-control btn btn-success"  >Pay</button>
       
  </div>
   
        </div>
                
            </form>
            
            <br><br>
            
        <div class="modal-footer">
           
                    <div class="col-sm-4"> <label for="ex2"></label>
                 <a href="../login.php"> <button type="button" class="btn btn-default" >Back to Login</button></a>
                    </div>
           
          
        </div>
         <br>
          <br>
      </div>
          
    </div>
  </div>
</div>
  </div>
              </section>
      </div>

      

  
  </div>
      <div class="row ">
          <div class="col-sm-offset-2 col-sm-6">
          <p>We accept all types of credit card</p> 
         
          <div><img src="../images/verve.png"  height="20%" width="10%" class="img-responsive pull-left" alt="verve card"/>
         <img src="../images/mastercard-logo-473B8726A9-seeklogo.com.png" class="img-responsive pull-left" height="20%" width="10%" alt="master card"/>
          <img src="../images/visa.png" class="img-responsive pull-left" height="20%" width="10%" alt="master card"/></div>
          </div>
      </div>
      </div>
  <span id="msg"></span>
</body>
</html>
<script>
    $(document).ready(function(){
         
       $(function(){
    var options = {
      width: 200,
      symbol: 'NGN'
    };
    $('.amount').money_field(options);
  });  $('#betting_capital').keyup(function(){
        betting_cap = "";
      betting_cap = $('#betting_capital').val();
       
                if(betting_cap < 10000){
   amount_pay = 1000; 
  
    } 
    if(betting_cap > 10000){
         amount_pay =  betting_cap*10/100;
    }
    $('#insurance_fee').val( amount_pay );
    });       
   $('#betting_capital').blur(function(){
        betting_cap = $('#betting_capital').val();
        amount_pay =  betting_cap*10/100;
                if(betting_cap < 10000){
   amount_pay = 1000;
    
}
    
        $('#insurance_fee').val( amount_pay );
    });
    
 function payWithPaystack(email,amount,mobile){
    var handler = PaystackPop.setup({
      key: 'pk_live_3c7e77788c54085a1d22b8e05e5a4ff41b9870fb',
      email: email,
      amount: amount,
      
      ref: '', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: mobile
            }
         ]
      },
      callback: function(response){
          
  $.ajax({
            
            url:'https://tukoolbetinsurance.com/login/addsubscription.php?reference=' + response.reference,
            method:'POST',
            data:{ amount:amount, user_id:user_id},
            dataType: 'text',
            success:function(data){
                
              
            if(data === 'successfull'){
             
             window.location ='https://tukoolbetinsurance.com/login.php';
            }
            else{
                 alert("please try again");
            }
            }
        
    });
    },
      onClose: function(){
          alert('window closed');
          $('#wait').text('');
      }
    });
    handler.openIframe();
  } 
    

 $('#pay').click(function(){
       
     email = $('#email').val();
     betting_cap = $('#betting_capital').val(); 
     amount = ((betting_cap *10)/100) * 100;
     mobile = $('#phone').val();
     user_id = $('#user_id').val();
     if(isNaN(betting_cap)){
    $('#beterror').text("is must be a number ");
       return false;
}
if(email == '' && mobile == ''){
    alert('error occured please contact administrator');
    return false;
}
else if(betting_cap < 10000){
   amount = 100000 ;
    
}

 r = confirm('You are about to pay NGN'+(amount/100)+ ' as insurance fee');
 if(r==true) 
 {    
        $('#insurance_fee').val(amount/100);
  payWithPaystack(email,amount,mobile, user_id);
 }
  });
  
  //subscribe  for normal games
  $('#payfornormal').click(function(){
       
     email = $('#email').val();
     betting_cap = $('#betting_capital').val(); 
     amount = 3000 * 100;
     mobile = $('#phone').val();
     user_id = $('#user_id').val();
     
if(email == '' && mobile == ''){
    alert('error occured please contact administrator');
    return false;
}


 r = confirm('You are about to pay NGN'+(amount/100)+ ' as insurance fee');
 if(r==true) 
 {    
        $('#insurance_fee').val(amount/100);
  payWithPaystack(email,amount,mobile, user_id);
 }
  });
  });
  
</script>
