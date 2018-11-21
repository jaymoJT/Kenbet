<?php 

  include 'partials/head.php';
 
   if (!isset($_SESSION['m_admin'])) {
  echo "  <script type=text/javascript >
              location.href='../admin.php?server=Empty fields!';
            </script> ";
}

?>

<body>
	<?php 
    include 'partials/loader.php';
    include 'partials/admin_header_connect.php';

    //Contains admin's functions
    include 'partials/admin_navbar.php';
    //contains a menu for admin's navigation through subscription data
    include 'partials/toolbar.php';
   
	?>
<!--This container is to make the contantes in this page look centred-->
<div class="container">
  <div class="row">
    <!--This container contains the games division -->
    <h3>Posted predictions</h3>
     
  </div>
</div>
  
    

</body>
<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>