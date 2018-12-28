<?php
   include('session.php');
?>
<html>

  <body>
    <h1>Welcome <?php echo $_SESSION['checkedin_traveller']; ?></h1>
    <h2><a href = "checkout.php">Check Out</a></h2>
  </body>

</html>
