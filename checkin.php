<?php
   include("db/dbconnect.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // traveller and travel_tag sent from form

      $traveller = mysqli_real_escape_string($conn,$_POST['traveller']);
      $travel_tag = mysqli_real_escape_string($conn,$_POST['travel_tag']);

      $sql = "SELECT id FROM travellers WHERE name = '$traveller' and tag = '$travel_tag'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $traveller and $travel_tag, table row must be 1 row

      if($count == 1) {
         $_SESSION['checkedin_traveller'] = $traveller;

         include("welcome.php");
      }else {
         $error = "The provided travel tag is invalid";
      }
   }
?>
<html>
  <head>
    <style type = "text/css">
       body {
          font-family:Arial, Helvetica, sans-serif;
          font-size:14px;
       }
       label {
          font-weight:bold;
          width:100px;
          font-size:14px;
       }
       .box {
          border:#666666 solid 1px;
       }
    </style>
  </head>

  <div align = "center">
     <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style = "margin:30px">

           <form action = "" method = "post">
              <label>Traveller  :</label><input type = "text" name = "traveller" class = "box"/><br /><br />
              <label>Travel tag  :</label><input type = "password" name = "travel_tag" class = "box" /><br/><br />
              <input type = "submit" value = " Submit "/><br />
           </form>

           <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
           <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $success; ?></div>
        </div>
     </div>
  </div>
</html>
