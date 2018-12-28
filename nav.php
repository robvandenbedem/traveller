<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/offcanvas.css">
    <script src="js/offcanvas.js"></script>
</head>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="index.php">Travellers</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item align-self-center">
          <a class="nav-link" href="traveller.php"> Agent zero </a>
        </li>
        <!-- Future Travellers -->
      </ul>
    </div>
  </nav>
</html>
