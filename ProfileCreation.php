<?php require 'database-connection.php' ?>
<?php require 'session.php' ?>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST") {

$ID = $_GET['id'];
$lastID = $_SESSION['lastid'];

$FirstName = mysqli_real_escape_string($db, $_REQUEST['FirstName']);
$LastName = mysqli_real_escape_string($db, $_REQUEST['LastName']);
$City = mysqli_real_escape_string($db, $_REQUEST['City']);
$Country = mysqli_real_escape_string($db, $_REQUEST['Country']);
$School = mysqli_real_escape_string($db, $_REQUEST['School']);
@$Gender = mysqli_real_escape_string($db, $_REQUEST['Gender']);
@$Education = mysqli_real_escape_string($db, $_REQUEST['Education']);
$Answer1 = mysqli_real_escape_string($db, $_REQUEST['Answer1']);
$Answer2 = mysqli_real_escape_string($db, $_REQUEST['Answer2']);
$Answer3 = mysqli_real_escape_string($db, $_REQUEST['Answer3']);
$Passions = mysqli_real_escape_string($db, $_REQUEST['Passions']);
$Instagram = mysqli_real_escape_string($db, $_REQUEST['Instagram']);
$Facebook = mysqli_real_escape_string($db, $_REQUEST['Facebook']);
$Twitter = mysqli_real_escape_string($db, $_REQUEST['Twitter']);
$Tiktok = mysqli_real_escape_string($db, $_REQUEST['Tiktok']);


//Dropdown mennu
$Age = mysqli_real_escape_string($db, $_REQUEST['Age']);
$Question1 = mysqli_real_escape_string($db, $_REQUEST['Question1']);
$Question2 = mysqli_real_escape_string($db, $_REQUEST['Question2']);
$Question3 = mysqli_real_escape_string($db, $_REQUEST['Question3']);

?>

<?php


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$Image = $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
echo "Sorry, there was an error image your file.";
}
?>


<?php
//Insert query
$sql = "Insert INTO ProfileCreation
(ID, FirstName, LastName, City, Country, School, Gender, Education, Age, Question1,
Answer1, Question2, Answer2, Question3, Answer3, Passions, Instagram, Facebook, Twitter, Tiktok, Image)
VALUES ('$ID','$FirstName', '$LastName', '$City', '$Country', '$School', '$Gender', '$Education', '$Age',
'$Question1', '$Answer1', '$Question2', '$Answer2', '$Question3', '$Answer3'
, '$Passions','$Instagram', '$Facebook', '$Twitter', '$Tiktok', '$Image')";
if(mysqli_query($db, $sql)){
    echo header("location: Timeline.php?id=".$ID);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}

?>


<html lang="en">
<head>
<style>
/* Form */
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
hr.new1 {
  border: 30px solid;
  color: #8FA382;
}
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
  width: 73%;
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
<body>
<img src=https://i.imgur.com/GfqbIW4.png width=150>
<hr class="new1"><br><br><br><br>
<br><br><br>
<p class="title-bar">Create Your Profile</p>
<br>
<div class="form-container" id="form-container">
  <form method="post" action="" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <div>
          <label for="FirstName" class="basic">FirstName:</label><br>
          <input type="text" name="FirstName" id="FirstName" required><br><br>
        </div>
        <div>
          <label for="LastName" class="basic">LastName:</label><br>
          <input type="text" name="LastName" id="LastName" required><br><br>
        </div>
        <div>
          <label for="City" class="basic">City:</label><br>
          <input type="text" name="City" id="City" required><br><br>
        </div>
        <div>
          <label for="Country" class="basic">Country:</label><br>
          <input type="text" name="Country" id="Country" required><br><br>
        </div>
        <div>
          <label for="School" Class="basic">School:</label><br>
          <input type="text" name="School" id="School" required><br><br>
        </div>
        <div>
          <label for="Age" Class="basic">Age:</label><br>
          <input type="text" name="Age" id="Age" required><br><br>
        </div>
        <div>
          <p>Gender:
          <input type="radio" name="Gender" id="MaleGen" value="Male">Male
          <input type="radio" name="Gender" id="FemaleGen" value="Female">Female
          <input type="radio" name="Gender" id="Non-BinaryGen" value="Non-Binary">Non-Binary
          </p>
        </div><br>
        <div>
          <p>Education:
          <input type="checkbox" name="Education" value="High-School">High-School<br>
          <input type="checkbox" name="Education" value="Post-Secondary">Post-Secondary<br>
          <input type="checkbox" name="Education" value="Graduate/MBA">Graduate/MBA<br>
          <input type="checkbox" name="Education" value="PHD">PHD
          </p>
        </div><br>
        <div>
          <p>Answer Three Questions and Let Others Get to Know You!<br><br>
          <label for="Questions">Choose a Question:</label><br><br>
          <select name="Question1" id="Question1" class="question">
            <option value="What makes you laugh the most?">What makes you laugh the most?</option>
            <option value="What is your favorite book to read?">What is your favorite book to read?</option>
            <option value="In my free time, I like to...">In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?">What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?">What is your biggest fear?</option>
            <option value="My favourite food is...">My favourite food is...</option>
            <option value="An unusual skill of mine is...">An unusual skill of mine is...</option>
            <option value="Don't Hate me if I...">Don't Hate me if I...</option>
            <option value="Give me travel tips for...">Give me travel tips for...</option>
            <option value="I'm overly competitive about...">I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?">If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves.">List two pet peeves.</option>
            <option value="Three words I would use to describe me:">Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answers">Answer:</label><br>
          <textarea name="Answer1" cols="30" rows="3" id="Answer1" class="Answer" required></textarea><br><br>
          </p>
        </div>
        <div>
          <label for="Questions">Choose a question:</label><br><br>
          <select name="Question2" id="Question2" class="question">
            <option value="What makes you laugh the most?">What makes you laugh the most?</option>
            <option value="What is your favorite book to read?">What is your favorite book to read?</option>
            <option value="In my free time, I like to...">In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?">What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?">What is your biggest fear?</option>
            <option value="My favourite food is...">My favourite food is...</option>
            <option value="An unusual skill of mine is...">An unusual skill of mine is...</option>
            <option value="Don't Hate me if I...">Don't Hate me if I...</option>
            <option value="Give me travel tips for...">Give me travel tips for...</option>
            <option value="I'm overly competitive about...">I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?">If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves.">List two pet peeves.</option>
            <option value="Three words I would use to describe me:">Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answers">Answer:</label><br>
          <textarea name="Answer2" cols="30" rows="3" id="Answer2" class="Answer" required></textarea><br><br>
        </div>
        <div>
          <p><label for="Questions">Choose a question:</label><br><br>
          <select name="Question3" id="Question3" class="question">
            <option value="What makes you laugh the most?">What makes you laugh the most?</option>
            <option value="What is your favorite book to read?">What is your favorite book to read?</option>
            <option value="In my free time, I like to...">In my free time, I like to...</option>
            <option value="What would you sing at Karaoke night?">What would you sing at Karaoke night?</option>
            <option value="What is your biggest fear?">What is your biggest fear?</option>
            <option value="My favourite food is...">My favourite food is...</option>
            <option value="An unusual skill of mine is...">An unusual skill of mine is...</option>
            <option value="Don't Hate me if I...">Don't Hate me if I...</option>
            <option value="Give me travel tips for...">Give me travel tips for...</option>
            <option value="I'm overly competitive about...">I'm overly competitive about...</option>
            <option value="If you could choose to do anything for a day, what would it be?">If you could choose to do anything for a day, what would it be?</option>
            <option value="List two pet peeves.">List two pet peeves.</option>
            <option value="Three words I would use to describe me:">Three words I would use to describe me:</option>
          </select><br><br>
          <label for="Answer3">Answer:</label><br>
          <textarea name="Answer3" cols="30" rows="3" id="Answer3" class="Answer" required></textarea>
          </p>
        </div>
        <div>
          <label for="Passions">Passions:</label><br>
          <textarea name="Passions" cols="50" rows="5" id="Passions" class="Passion" required></textarea>
          </p>
        </div>
        <div>
          <label for="Instagram" class="basic">Instagram Link:</label><br>
          <input type="Instagram" name="Instagram" id="Instagram"><br><br>
        </div>
        <div>
          <label for="Facebook" class="basic">Facebook Link:</label><br>
          <input type="Facebook" name="Facebook" id="Facebook"><br><br>
        </div>
        <div>
          <label for="Twitter" class="basic">Twitter Link:</label><br>
          <input type="Twitter" name="Twitter" id="Twitter"><br><br>
        </div>
        <div>
          <label for="Tiktok" class="basic">Tiktok Link:</label><br>
          <input type="Tiktok" name="Tiktok" id="Tiktok"><br><br>
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
      <input type="submit" value="Create my Profile" name="submit">
    </div>
  </div>
</div>
</form><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
