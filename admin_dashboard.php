<?php include 'partials/head.php';
     
   if (!isset($_SESSION['m_admin'])) {
 echo "  <script type=text/javascript >
                   location.href='../index.php?server=Empty fields!';
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
      <h4>Admin/Home</h4>
      <h5><b>Earnings summary</b></h5>
    </div>
    
  </div>
</div>
      

</body>
<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>