<?php include 'partials/head.php'; ?>

<body>
	<?php 
    include 'partials/loader.php';
    include 'partials/header_connect.php';
    include 'partials/navbar.php'
   
	;?>
    <div class="container">
     <div class="jumbotron">
     	<div class="container">
        <div class="col-sm-6">
          <h3>To join</h3>
          <p>
            1. Choose your preferred subscription and pay via Mpesa.<br>
            2. Confirm your payment on the "<b>Join us</b>." Page.<br>
            3. You'll be directed to a page to create your password.
          </p>
        </div>
        <div class="col-sm-6">
          <form name="mpsForm" action="partials/member_login.php" method="post" class="booking-form">
            <div class="tm-form-inner">
                <div class="form-group" style="color:#000;">
                    <label>Your Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Your Mpesa phone number">
                </div>                
                <div class="form-group" style="color:#000;">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter your password">
                </div>
            </div>                                                   
            <div class="form-group tm-yellow-gradient-bg text-center">
                <button type="submit" name="submit" value="send" class="tm-yellow-btn" style="background-color:#4a763c;">Log in</button>
            </div>  
          </form>
        </div>
     	    
        </div>  
     	
     </div>
    </div>

</body>
<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>