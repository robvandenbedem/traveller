<?php
   include('db/dbconnect.php');
   session_start();

   $traveller_check = $_SESSION['checkedin_traveller'];

   $ses_sql = mysqli_query($conn,"select name from travellers where name = '$traveller_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $checkin_session = $row['name'];
   // if checkedin_traveller in session is not found redirect to index
   if(!isset($_SESSION['checkedin_traveller'])){
      header('location:index.php');
   }
?>
