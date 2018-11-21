<?php 
 
 include 'partials/head.php';

 if (!isset($_SESSION['m_admin'])) {
  echo "  <script type=text/javascript >
              location.href='../admin.php?server=Not logged in!';
            </script> ";
}

?>

<body>
	<?php 
    include 'partials/loader.php';
    include 'partials/header_connect.php';

    //Contains admin's functions
    include 'partials/admin_navbar.php';
    //contains a menu for admin's navigation through subscription data
    include 'partials/toolbar.php';
   
	?>
<!--This container is to make the contantes in this page look centred-->
<div class="container">
  <div class="row">
    <!--Column six is to divide the page into two....This first will contain the SMS HTML form-->
    <div class="col-sm-6">
      <h2>Send SMS</h2>
      <form name="mpsForm" action="#" method="post" class="booking-form">
            <div class="tm-form-inner">           
                <div class="form-group" style="color:#000;">
                    <label>Phone numbers</label>
                    <input type="number" class="form-control" name="matches">
                </div>                    
                <div class="form-group">
                  <label for="predictions" style="color:#000;">Predictions</label>
                  <textarea class="form-control" id="predictions" rows="4"></textarea>
                </div>
            </div>                                                   
            <div class="form-group tm-yellow-gradient-bg text-center">
                <button type="submit" name="submit" value="send" class="tm-yellow-btn" style="background-color:#4a763c;color:#fff;">Post</button>
            </div>  
        </form>
    </div>   
  </div>
</div>
  
    

</body>
<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>