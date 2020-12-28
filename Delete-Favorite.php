<?php require 'session.php'?>
<?php require 'database-connection.php'?>
<?php require 'Navigation.php'?>
    <?php

    if (!empty($_SESSION['favorites'])) {
        foreach ($_SESSION['favorites'] as $delete => $user1)
                unset($_SESSION['favorites'][$delete]);
    }

     ?>

      <html>
          <head>
            <link rel="stylesheet" href="style1.css" type="text/css">
            <meta http-equiv="refresh" content="1;url=Timeline.php" />
            <h4> Deleting from your favorites... </h4>
          </head>
     </html>
