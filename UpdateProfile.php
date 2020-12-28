<?php require 'database-connection.php' ?>
<?php require 'session.php' ?>
<?php require_once("Navigation.php"); ?>

<?php

$ID = $_SESSION['id'];
//

$sql = "SELECT * FROM ProfileCreation WHERE ID='$ID'";

if($result=mysqli_query($db, $sql)){
    $row=mysqli_fetch_array($result);
}

// Close connection
mysqli_close($db);

?>


<html lang="en">
<head>
<style>
/* Form */
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.form-container {
  position: relative;
  border-radius: 5px;
  background-color: #B2C8A4;
  padding: 70px 0 70px 0;
  margin-left: 200px;
  margin-right: 200px;
  text-align: left;

}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #8FA382;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #CDD4C9;
}

/* Two-column layout */
.col {
  float: center;
  width: 65%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
/* style the reset button */
input[type=reset] {
  background-color: #8FA382;
  color: white;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #CDD4C9;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* bottom container */
.bottom-container1 {
  text-align: center;
  background-color: #8FA382;
  border-radius: 0px 0px 4px 4px;
  margin-left: 200px;
  margin-right: 200px;
}
/* bottom container */
.bottom-container2 {
  text-align: center;
  background-color: #8FA382;
  border-radius: 0px 0px 4px 4px;
  margin-left: 200px;
  margin-right: 200px;
}
.title-bar {
  text-align: center;
  background-color: #8FA382;
  border-radius: 0px 0px 4px 4px;
}
/* style the reset button */
p.title-bar {
  width: 72%;
  padding: 12px;
  border: none;
  border-radius: 25px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 20px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
  text-align: center;
  color: White;
  margin-left: 200px;
  margin-right: 200px;
  display: block;
}
.Answer {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
  }
.Passion {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
  }
  .question {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
  }
  .image {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
  }
}
</style>
<meta charset="UTF-8">
<title>Frinder Profile Edit Page</title>
</head>
<!--Form-->
<br><br><br>
<p class="title-bar">Update Your Profile</p>
<br>
<div class="form-container" id="form-container">
  <form method="post" action="update.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <div>
          <label for="FirstName" class="basic">FirstName:</label><br>
          <input type="text" value="<?php echo $row['FirstName'] ?>" name="FirstName" id="FirstName" required><br><br>
        </div>
        <div>
          <label for="LastName" class="basic">LastName:</label><br>
          <input type="text" value="<?php echo $row['LastName'] ?>" name="LastName" id="LastName" required><br><br>
        </div>
        <div>
          <label for="City" class="basic">City:</label><br>
          <input type="text" value="<?php echo $row['City'] ?>" name="City" id="City" required><br><br>
        </div>
        <div>
          <label for="Country" class="basic">Country:</label><br>
          <input type="text" value="<?php echo $row['Country'] ?>" name="Country" id="Country" required><br><br>
        </div>
        <div>
          <label for="School" Class="basic">School:</label><br>
          <input type="text" value="<?php echo $row['School'] ?>" name="School" id="School" required><br><br>
        </div>
        <div>
          <label for="Age" Class="basic">Age:</label><br>
          <input type="text" value="<?php echo $row['Age'] ?>" name="Age" id="Age" required><br><br>
        </div>
        <div>
          <p>Gender:
          <input type="radio" <?php echo ($row['Gender']=='Male')?'checked':'' ?> name="Gender" id="MaleGen" value="Male">Male
          <input type="radio" <?php echo ($row['Gender']=='Female')?'checked':'' ?> name="Gender" id="FemaleGen" value="Female">Female
          <input type="radio" <?php echo ($row['Gender']=='Non-Binary')?'checked':'' ?> name="Gender" id="Non-BinaryGen" value="Non-Binary">Non-Binary
          </p>
        </div><br>
        <div>
          <p>Education:
          <input type="checkbox" <?php echo ($row['Education']=='High-School')?'checked':'' ?> name="Education" value="High-School">High-School<br>
          <input type="checkbox" <?php echo ($row['Education']=='Post-Secondary')?'checked':'' ?> name="Education" value="Post-Secondary">Post-Secondary<br>
          <input type="checkbox" <?php echo ($row['Education']=='Graduate/MBA')?'checked':'' ?> name="Education" value="Graduate/MBA">Graduate/MBA<br>
          <input type="checkbox" <?php echo ($row['Education']=='PHD')?'checked':'' ?> name="Education" value="PHD">PHD
          </p>
        </div><br>
        <div>
          <p>Answer Three Questions and Let Others Get to Know You!<br><br>
          <label for="Questions">Choose a Question:</label><br><br>
          <select name="Question1" id="Question1" class=question>
            <option value="What makes you laugh the most?" <?php echo ($row['Question1']== 'What makes you laugh the most?')?'selected' : '' ?>>What makes you laugh the most?</option>
            <option value="What is your favorite book to read?" <?php echo ($row['Question1']== 'What is your favorite book to read?')?'selected' : '' ?>>What is your favorite book to read?</option>
            <option value="In my free time, I like to..."<?php echo ($row['Question1']== 'In my free time, I like to...')?'selected' : '' ?>>In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?"<?php echo ($row['Question1']== 'What would you sing at Karaoke night?')?'selected' : '' ?>>What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?"<?php echo ($row['Question1']== 'What is your biggest fear?')?'selected' : '' ?>>What is your biggest fear?</option>
            <option value="My favourite food is..." <?php echo ($row['Question1']== 'My favourite food is...')?'selected' : '' ?>>My favourite food is...</option>
            <option value="An unusual skill of mine is..." <?php echo ($row['Question1']== 'An unusual skill of mine is...')?'selected' : '' ?>>An unusual skill of mine is...</option>
            <option value="Don't Hate me if I..." <?php echo ($row['Question1']== "Don't Hate me if I...")?'selected' : '' ?>>Don't Hate me if I...</option>
            <option value="Give me travel tips for..." <?php echo ($row['Question1']== 'Give me travel tips for...')?'selected' : '' ?>>Give me travel tips for...</option>
            <option value="I'm overly competitive about..." <?php echo ($row['Question1']== "I'm overly competitive about...")?'selected' : '' ?>>I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?" <?php echo ($row['Question1']== 'If you could choose to do anything for a day, what would it be?')?'selected' : '' ?>>If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves." <?php echo ($row['Question1']== 'List two pet peeves.')?'selected' : '' ?>>List two pet peeves.</option>
            <option value="Three words I would use to describe me:" <?php echo ($row['Question1']== 'Three words I would use to describe me:')?'selected' : '' ?>>Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answers">Answer:</label><br>
          <textarea name="Answer1" cols="30" rows="3" id="Answer1" class="Answer" required><?php echo $row['Answer1'] ?></textarea><br><br>
          </p>
        </div>
        <div>
          <label for="Questions">Choose a question:</label><br><br>
          <select name="Question2" id="Question2" class=question>
            <option value="What makes you laugh the most?" <?php echo ($row['Question2']== 'What makes you laugh the most?')?'selected' : '' ?>>What makes you laugh the most?</option>
            <option value="What is your favorite book to read?" <?php echo ($row['Question2']== 'What is your favorite book to read?')?'selected' : '' ?>>What is your favorite book to read?</option>
            <option value="In my free time, I like to..." <?php echo ($row['Question2']== 'In my free time, I like to...')?'selected' : '' ?>>In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?"<?php echo ($row['Question2']== 'What would you sing at Karaoke night?')?'selected' : '' ?>>What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?" <?php echo ($row['Question2']== 'What is your biggest fear?')?'selected' : '' ?>>What is your biggest fear?</option>
            <option value="My favourite food is..." <?php echo ($row['Question2']== 'My favourite food is...')?'selected' : '' ?> >My favourite food is...</option>
            <option value="An unusual skill of mine is..." <?php echo ($row['Question2']== 'An unusual skill of mine is...')?'selected' : '' ?>>An unusual skill of mine is...</option>
            <option value="Don't Hate me if I..." <?php echo ($row['Question2']== "Don't Hate me if I...")?'selected' : '' ?>>Don't Hate me if I...</option>
            <option value="Give me travel tips for..." <?php echo ($row['Question2']== 'Give me travel tips for...')?'selected' : '' ?>>Give me travel tips for...</option>
            <option value="I'm overly competitive about..." <?php echo ($row['Question2']== "I'm overly competitive about...")?'selected' : '' ?>>I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?" <?php echo ($row['Question1']== 'If you could choose to do anything for a day, what would it be?')?'selected' : '' ?>>If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves." <?php echo ($row['Question2']== 'List two pet peeves.')?'selected' : '' ?>>List two pet peeves.</option>
            <option value="Three words I would use to describe me:" <?php echo ($row['Question2']== 'Three words I would use to describe me:')?'selected' : '' ?>>Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answers">Answer:</label><br>
          <textarea name="Answer2" cols="30" rows="3" id="Answer2" class="Answer" required><?php echo $row['Answer2'] ?></textarea><br><br>
        </div>
        <div>
          <p><label for="Questions">Choose a question:</label><br><br>
          <select name="Question3" id="Question3" class=question>
            <option value="What makes you laugh the most?" <?php echo ($row['Question3']== 'What makes you laugh the most?')?'selected' : '' ?>>What makes you laugh the most?</option>
            <option value="What is your favorite book to read?" <?php echo ($row['Question3']== 'What is your favorite book to read?')?'selected' : '' ?>>What is your favorite book to read?</option>
            <option value="In my free time, I like to..." <?php echo ($row['Question3']== 'In my free time, I like to...')?'selected' : '' ?>>>In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?" <?php echo ($row['Question3']== 'What would you sing at Karaoke night?')?'selected' : '' ?>>What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?" <?php echo ($row['Question3']== 'What is your biggest fear?')?'selected' : '' ?>What is your biggest fear?</option>
            <option value="My favourite food is..." <?php echo ($row['Question3']== 'My favourite food is...')?'selected' : '' ?>>My favourite food is...</option>
            <option value="An unusual skill of mine is..." <?php echo ($row['Question3']== 'An unusual skill of mine is...')?'selected' : '' ?>>An unusual skill of mine is...</option>
            <option value="Don't Hate me if I..." <?php echo ($row['Question3']== "Don't Hate me if I...")?'selected' : '' ?>>Don't Hate me if I...</option>
            <option value="Give me travel tips for..." <?php echo ($row['Question3']== 'Give me travel tips for...')?'selected' : '' ?>>Give me travel tips for...</option>
            <option value="I'm overly competitive about..." <?php echo ($row['Question3']== "I'm overly competitive about...")?'selected' : '' ?>>I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?" <?php echo ($row['Question1']== 'If you could choose to do anything for a day, what would it be?')?'selected' : '' ?>>If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves." <?php echo ($row['Question3']== 'List two pet peeves.')?'selected' : '' ?>>List two pet peeves.</option>
            <option value="Three words I would use to describe me:" <?php echo ($row['Question3']== 'Three words I would use to describe me:')?'selected' : '' ?>>Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answer3">Answer:</label><br>
          <textarea name="Answer3" cols="30" rows="3" id="Answer3" class="Answer" required><?php echo $row['Answer3'] ?></textarea>
          </p>
        </div>
        <div>
          <label for="Passions">Passions:</label><br>
          <textarea name="Passions" cols="50" rows="5" id="Passions" class="Passion" required><?php echo $row['Passions'] ?></textarea>
          </p>
        </div>
        <div>
          <label for="Instagram" class="basic">Instagram Link:</label><br>
          <input type="Instagram" value="<?php echo $row['Instagram'] ?>" name="Instagram" id="Instagram"><br><br>
        </div>
        <div>
          <label for="Facebook" class="basic">Facebook Link:</label><br>
          <input type="Facebook" value="<?php echo $row['Facebook'] ?>" name="Facebook" id="Facebook"><br><br>
        </div>
        <div>
          <label for="Twitter" class="basic">Twitter Link:</label><br>
          <input type="Twitter" value="<?php echo $row['Twitter'] ?>" name="Twitter" id="Twitter"><br><br>
        </div>
        <div>
          <label for="Tiktok" class="basic">Tiktok Link:</label><br>
          <input type="Tiktok" value="<?php echo $row['Tiktok'] ?>" name="Tiktok" id="Tiktok"><br><br>
        </div>
        <div>
          <p>Upload your Profile Picture:</p>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
    </div>
  </div>
</div>
<div class="bottom-container1" id="bottom-container1">
  <div class="row">
    <div class="col">
      <input type="reset" value="Reset">
    </div>
  </div>
</div>
<div class="bottom-container2" id="bottom-container2">
  <div class="row">
    <div class="col">
      <input type="submit" value="Update" name="submit">
    </div>
  </div>
</div>
</form><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
