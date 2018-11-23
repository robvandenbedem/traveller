<?php
   include('dbconnect.php');
   session_start();

   $traveller_check = $_SESSION['checkin_traveller'];

   $ses_sql = mysqli_query($conn,"select name from travellers where name = '$traveller_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $checkin_session = $row['name'];

   if(!isset($_SESSION['checkin_traveller'])){
      header("location:checkin.php");
   }
?>
