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
    include 'partials/toolbar.php';


	?>
<div class="container">
  <div class="row">   
    <div class="col-sm-6">
      <h2>Post upcoming game predictions</h2>
      <form name="mpsForm" action="partials/post_games.php" method="post" class="booking-form">
            <div class="tm-form-inner">
               
                <div class="form-group" style="color:#000;">
                    <label for="bday">Game date</label>
                    <input type="date" id="bday" name="gdate">
                </div>              
                <div class="form-group" style="color:#000;">
                    <label>Matches</label>
                    <input type="text" class="form-control" name="matches">
                </div>
                <label style="color:#000;">Prediction type</label>
                    <select name="type" class="selectpicker show-tick form-control">
                        <option> </option>
                        <option style="color:#000;">Free</option>
                        <option style="color:#000;">Premium</option>
                        <option style="color:#000;">Jackpot</option>
                                 
                    </select>     
                <div class="form-group" style="color:#000;">
                    <label>Predictions</label>
                    <input type="text" class="form-control" name="predictions">
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

