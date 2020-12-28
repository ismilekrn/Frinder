<html>
<head>
    <title>Show Favorites</title>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="favourites1.css">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src=" jquery.dataTables.min.js"></script>
</head>
<body>
<table class="display" cellspacing="0" width="100%">
<tbody>
<?php require_once 'session.php'; ?>
<?php require_once 'database-connection.php'; ?>
<?php require_once 'Navigation.php'?>
<?php

    if(isset($_SESSION['favorites'])) {
    foreach($_SESSION['favorites'] as $user) {
    $query = "SELECT * FROM ProfileCreation WHERE ID='$user'";
    $result = mysqli_query($db,$query);

        while ($row = mysqli_fetch_array($result)){
            $ID = $row['ID'];
            $FullName = $row['FirstName'] . ' ' . $row['LastName'];

            echo "<tr>";
                echo "<td class='user-info-full-name'><h2><a href=ProfilePage.php?id=$ID>" . $FullName . "</a></h2></td>";
                echo '<td><img id="thumbnail" src="images/'.$row['Image'].'"</td>';
                echo '<td><a href=Delete-Favorite.php?id='.$ID.' class="delete" align=center>Delete From Favorites</a></td>';
            echo "</tr>";
            }
            echo "</table>";
        }
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
