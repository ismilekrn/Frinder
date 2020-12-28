<?php require 'database-connection.php' ?>
<?php require 'session.php' ?>
<?php
    {
  $errors = array();

  if($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $repeatpassword =mysqli_real_escape_string($db,$_POST['repeatpassword']);

  //if ($password != $repeatpassword) {array_push($errors, "Password do not match. Please try again.");}

  $query1 = "SELECT ID FROM users WHERE username='$username' OR email='$email' ";

  $result = mysqli_query($db, $query1);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($count == 1) {
      echo "Username or Email already taken.";
  } else {
      $password = md5($password); //hashing the password here for security reasons.
      $query2 = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
      mysqli_query($db, $query2);
      $lastID = mysqli_insert_id($db);
      $_SESSION['id'] = $lastID;
      echo header("location: ProfileCreation.php?id=".$lastID); //profile creation
        }

      }
    };
    mysqli_close($db);
?>

<DOCTYPE html>
<html>
  <head>
    <title> Sign up </title>
    <link rel="stylesheet" type="text/css" href="signup.css"
  </head>
    <body>
      <img src=https://i.imgur.com/GfqbIW4.png width=150>
      <hr class="new1"><br><br><br><br><br><br><br><br><br>
      <div class="container">
        <form action="" method="post">
          <div class="row">
            <div class="col">
              <input type="text" name="username" placeholder="Username" required>
              <input type="text" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Password" required>
              <input type="password" name="repeatpassword" placeholder="Confirm Password" required>
              <input type="submit" value="Sign Up">
            </div>
          </div>
        </form>
      </div>
      <div class="bottom-container">
        <div class="row">
          <div class="col">
            <a href="login.php" style="color:white" class="btn">Already Have an Account?</a>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
      <p> By clicking Sign Up, you agree to our  <a href="terms.html"> Terms & Conditions</a></p>
    </body>
</html>
