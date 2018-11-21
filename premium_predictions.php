<?php
        include 'partials/head.php';
        
        if (!isset($_SESSION['m_name'])) {
 	        echo "  <script type=text/javascript >
                 alert('Please login to see predictions');
                   location.href='../member_login.php?server=Empty fields!';
                </script> ";
 	
            } else{
 	            
                include 'partials/header_connect.php';
                include 'partials/navbar.php';
                include 'partials/premium_tips_container.php';
                include 'partials/scripts.php'; 
                include 'partials/footer.php';

                  }


 ?>






