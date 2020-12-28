<?php require 'database-connection.php' ?>
<?php require 'session.php' ?>
<?php
  require_once("Navigation.php");
 ?>
<html>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST") {

//$ID = $_GET['id'];
$ID = $_SESSION['id'];
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
$sql = "Update ProfileCreation SET FirstName='$FirstName', LastName='$LastName', City='$City', Country='$Country', School='$School', Age='$Age', Gender='$Gender', Education='$Education', Question1='$Question1', Answer1='$Answer1', Question2='$Question2', Answer2='$Answer2', Question3='$Question3', Answer3='$Answer3', Passions='$Passions', Instagram='$Instagram', Facebook='$Facebook', Twitter='$Twitter', Tiktok='$Tiktok', Image='$Image' WHERE ID='$ID'";


if(mysqli_query($db, $sql)){
    echo header("location: Timeline.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
// Close connection
mysqli_close($db);

?>
</html>
