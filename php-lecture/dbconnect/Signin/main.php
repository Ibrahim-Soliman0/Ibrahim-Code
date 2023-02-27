<?php
session_start();
echo "Welcome ".$_SESSION['u']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
</head>
<body>
    <h1>Select an operation</h1><br><br>
    <a href="insert_GUI.html" target="_blank">Insert New Record</a><br>
    <a href="update.php" target="_blank">Update Existing Record</a><br>
    <a href="delete.php" target="_blank">Delete Existing Record</a><br>
    <a href="search_GUI.html" target="_blank">Search For Records</a><br>
    <a href="signout.php" target="_blank">Sign out</a><br>
</body>
</html>