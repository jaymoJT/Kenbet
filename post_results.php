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
    include 'partials/admin_header_connect.php';
    include 'partials/admin_navbar.php';
    include 'partials/toolbar.php'
   
	;?>
<div class="container">
  <div class="row"> 
    <div class="col-sm-6">
      <h2>Post past game results</h2>
      <form name="mpsForm" action="partials/post_results.php" method="post" class="booking-form">
            <div class="tm-form-inner">
               
                <div class="form-group" style="color:#000;">
                    <label for="bday">Game date</label>
                    <input type="date" id="gdate" name="gdate">
                </div>             
                <div class="form-group" style="color:#000;">
                    <label>Match</label>
                    <input type="text" class="form-control" name="gmatch">
                </div> 
                <div class="form-group" style="color:#000;">
                    <label>Our Prediction</label>
                    <input type="text" class="form-control" name="gpred">
                </div>
                <div class="form-group" style="color:#000;">
                    <label>Outcome</label>
                    <input type="text" class="form-control" name="gresult">
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

