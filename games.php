<?php include 'partials/head.php'; ?>

<body>
	<?php 
   
    include 'partials/header_connect.php';
    include 'partials/navbar.php'
   
	;?>
    <div class="container">
     
   <h2>Upcoming games predictions</h2>
  
     <?php include 'views/upcoming_games.php';?>

    </div>

</body>



<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>