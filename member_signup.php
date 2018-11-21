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
        <div class="col-sm-8">
     	<form name="mpsForm" action="partials/member_signup.php" method="post" class="booking-form">
            <div class="tm-form-inner">
                <div class="form-group" style="color:#000;">
                    <label>Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>    
                <div class="form-group" style="color:#000;">
                    <label>Your Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="The phone number to receive texts">
                </div>               
                <div class="form-group" style="color:#000;">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Choose a password">
                </div>
            </div>                                                   
            <div class="form-group tm-yellow-gradient-bg text-center">
                <button type="submit" name="submit" value="send" class="tm-yellow-btn" style="background-color:#4a763c;color:#fff;">Log in</button>
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