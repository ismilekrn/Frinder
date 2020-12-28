<html>
<head>
<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="Timeline.css">
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src=" jquery.dataTables.min.js"></script>
</head>

<body>
<table id="myTable" class="display" cellspacing="0" width="100%">

<tbody>
<?php require 'database-connection.php' ?>
<?php require 'session.php' ?>
<?php
         require_once("Navigation.php");
?>
<?php

$ID = $_GET['id'];

$sql = " SELECT * FROM ProfileCreation";

    $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result)){
            $ID = $row['ID'];
            $FirstName =  $row['FirstName'];
            $AgeCityCountry = $row['Age'] . ', ' . $row['City'] . ', ' . $row['Country'];
            $Question1 =  $row['Question1'];
            $Answer1 =  $row['Answer1'];

            echo "<tr>";
                echo "<td class='user-info-first-name'><h2><a href=ProfilePage.php?id=$ID>".$FirstName."</a></h2></td>";
                echo "<td class='user-info-last-name'>" . $AgeCityCountry . "</td>";
                echo '<td><img id="thumbnail" src="images/'.$row['Image'].'"</td>';
                echo "<td class='user-info-question1'><b>" . $Question1 . "<b></td>";
                echo "<td class='user-info-answer1'>" . $Answer1 . "</td>";
            echo "</tr>";
}
?>
</tbody>
</table>
<script>
$(document).ready(function() {
$('#myTable').DataTable();
});
</script>
</body>
</html>
