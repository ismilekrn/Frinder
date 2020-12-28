
<?php require "Navigation.php"?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="ProfilePage.css">
</head>
<body>
<?php require 'session.php'?>
<?php require 'database-connection.php' ?>
<br><br>
<table class="display" cellspacing="0" width="100%">
    <?php
    $ID = $_GET['id'];
    $sql = " SELECT * FROM ProfileCreation WHERE ID='$ID'";
    $result = mysqli_query($db, $sql);


    while ($row = mysqli_fetch_array($result)){
        $FullName = $row['FirstName'] . ' ' . $row['LastName'];
        $Location = $row['City'] . ', ' . $row['Country'];
        $SchoolEducation = $row['Education'] . ', ' . $row['School'];
        $AgeGender = $row['Age'] . ', ' . $row['Gender'];
        $Question1 = $row['Question1'];
        $Answer1 = $row['Answer1'];
        $Question2 = $row['Question2'];
        $Answer2 = $row['Answer2'];
        $Question3 = $row['Question3'];
        $Answer3 = $row['Answer3'];
        $Passions = $row['Passions'];
        $Instagram = $row['Instagram'];
        $Facebook = $row['Facebook'];
        $Twitter = $row['Twitter'];
        $Tiktok = $row['Tiktok'];

        echo "<tr>";
        echo "<td class='user-info-full-name'><h1>" . $FullName . "</h1></td>";
        echo "<td class='user-info-age-gender'>" . $AgeGender . "</td>";
        echo "<td class='user-location'>" . $Location . "</td>";
        echo "<td class='user-school-education'>" . $SchoolEducation . "</td>";
        echo '<td><img id="thumbnail" src="images/'.$row['Image'].'"</td>';
        echo "<td class='user-question'>" . $Question1 . "</td>";
        echo "<td class='user-answer'>" . $Answer1 . "</td>";
        echo "<td class='user-question'>" . $Question2 . "</td>";
        echo "<td class='user-answer'>" . $Answer2 . "</td>";
        echo "<td class='user-question'>" . $Question3 . "</td>";
        echo "<td class='user-answer'>" . $Answer3 . "</td>";
        echo "<td class='socials'>Connect on Other Platforms:<td>";
        echo "<td class='user-socials'><a href=$Instagram>Instagram</a></td>";
        echo "<td class='user-socials'><a href=$Facebook>Facebook</a></td>";
        echo "<td class='user-socials'><a href=$Twitter>Twitter</a></td>";
        echo "<td class='user-socials'><a href=$Tiktok>Tiktok</a></td>";
        echo "<br>";
        echo '<td><a href=Add-Favourite.php?id='.$ID.' class="save" align=center>Save Profile</a></td>';
    echo "</tr>";


    }
    ?>
</html>
