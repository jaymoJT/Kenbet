<?php 

include 'partials/head.php';

 if (!isset($_SESSION['m_admin'])) {
     echo "  <script type=text/javascript >
              location.href='../admin.php?server=Log in first!';
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

    //connecting to the database
    include 'partials/connection.php';
    

   
	?>
<!--This container is to make the contantes in this page look centred-->
<div class="container">
  <div class="row">
    <!--This container contains the games division -->
    <h3>Posted games</h3>
     <table class="table table-striped">                     
      <div class="table responsive">
        <thead>
         <tr>
           <th>Match Date</th>
           <th>Match</th>
           <th>Match type</th>
           <th>Predictions</th>
           <th colspan="2" >Action</th>
         </tr>
        </thead>
      <tbody>

      <?php
       $sql = "SELECT  MatchDate, matches, mtype, predictions FROM games";

       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<tr>
            <td scope="row" style="color:#112187;">'  .$row["MatchDate"]. '</td>
            <td style="background-color:green;color:#fff;" >'.$row["matches"] .'</td>
            <td style="color:#112187;"> '  .$row["mtype"] .'</td>
            <td style="background-color:green;color:#fff;" >'.$row["predictions"] .'</td>
            <td><button ahref="results.php" class="btn btn-warning">Edit</button></td>
          </tr>';
            
        }
         
       }

           
      ?>


    
       </tbody>
    </div>
</table>

     
  </div>
</div>
  
    

</body>
<?php include 'partials/scripts.php'; 
      include 'partials/footer.php';
?>