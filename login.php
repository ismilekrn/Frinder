<?php require 'database-connection.php' ?>
<?php require 'session.php'?>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = mysqli_real_escape_string($db, $_POST['username']);
        $pword = mysqli_real_escape_string($db, $_POST['password']);
        $pword = md5($pword);

        $query = "SELECT ID FROM users WHERE Username='$uname' AND Password='$pword'";
        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            $_SESSION['id'] = $row['ID'];
            echo  header("location: Timeline.php?id=". $row['ID']); //timeline
        }
       else
       {
           echo "<h3>Your Login Name or Password is invalid. Please try again.</h3>";
       }
   }
       mysqli_close($db);

  ?>
<DOCTYPE html>
<html>
  <head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="login.css"
  </head>
    <body>
      <img src=https://i.imgur.com/GfqbIW4.png width=150>
      <hr class="new1"><br><br><br><br><br><br><br><br><br>
      <div class="container">
        <form action="" method="post">
          <div class="row">
            <div class="col">
              <input type="text" name="username" placeholder="Username" required>
              <input type="password" name="password" placeholder="Password" required>
              <input type="submit" value="Login">
            </div>
          </div>
        </form>
      </div>
      <div class="bottom-container">
        <div class="row">
          <div class="col">
            <a href="signup.php" style="color:white" class="btn">Sign up</a>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
      </body>
      </html>
