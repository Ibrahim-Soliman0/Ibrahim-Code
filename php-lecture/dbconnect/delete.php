<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete</title>
</head>

<body>
    <h2>Delete Existing Record</h2>
    <form method="post">
        <label>Enter Id: </label>
        <input name="x"><br><br>
        <input name="delete" type="submit" value="Delete">
    </form>
    <?php
    if (isset($_POST['delete'])) {
        $id = $_POST['x'];
        $sql = "DELETE FROM `students` WHERE Id = $id";
        include 'connect.php';
        $conn = dbconnect();
        if ($conn->query($sql) == True) {
            echo  "<script>alert('The record has been deleted successfully')</script>";
        } else {
            echo  "<script>alert('There has been an Error')</script>";
        }
        $conn->close();
    }
    ?>
</body>

</html>