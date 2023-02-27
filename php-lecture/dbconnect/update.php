<!DOCTYPE html>
<html lang="en">
<head>
    <title>update</title>
</head>
<body>
    <form method="POST">
        <h2>Update Existing Record</h2>
        <label>Enter Id: </label>
        <input name="x" required><br><br>
        <label>Enter new value for Major: </label>
        <input name="y"><br><br>
        <label>Enter new value for Minor: </label>
        <input name="z"><br><br>
        <input name="update" type="submit" value="Update">
    </form>
    <?php
    if (isset($_POST['update'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];
        $sql = "UPDATE `students` SET `Major`='$y',`Minor`='$z' WHERE Id = $x;";
        include 'connect.php';
        $conn = dbconnect();
        if ($conn->query($sql) == TRUE) {
            echo "<script>alert('Record updated successfully')</script>";
        } else {
            echo "<script>alert('Error updating file')</script>";
        }
        $conn->close();
    }
    ?>
</body>

</html>