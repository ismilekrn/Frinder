<?php require 'session.php'?>
<?php require 'database-connection.php'?>
<?php require 'Navigation.php'?>
    <?php

          $ID=$_GET['id'];

          if(!isset($_SESSION['favorites'])){
               $favoriteuser= array(); //Create the favorite array
              $_SESSION['favorites'] = $favoriteuser; //Add the array to the Session Array
          }

          array_push($_SESSION['favorites'],$ID);

      ?>

      <html>
          <head>
            <link rel="stylesheet" href="style1.css" type="text/css">
            <meta http-equiv="refresh" content="1;url=Timeline.php" />
            <h4> Adding to your favorites... </h4>
          </head>
     </html>
