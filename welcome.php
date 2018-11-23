<?php
   include('session.php');
?>
<html>

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $_SESSION['checkin_traveller']; ?></h1>
      <h2><a href = "checkout.php">Check Out</a></h2>
   </body>

</html>
