<?php

  include 'partials/head.php';

  if (!isset($_SESSION['m_name'])) {
   echo "  <script type=text/javascript >
              location.href='../index.php?server=Not logged in!';
            </script> ";
   }

?>

<body>
	<?php 
   
    include 'partials/header_connect.php';
    include 'partials/navbar.php'
   
	;?>
    <div class="container">
     
   <h2>Free predictions</h2>
  
     <?php include 'views/free_tips.php';?>

    </div>

</body>



<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>