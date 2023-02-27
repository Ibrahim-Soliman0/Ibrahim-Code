<?php
if (isset($_POST['insert'])) {
    $id = $_POST["x"];
    $major = $_POST["y"];
    $minor = $_POST["z"];
    $back = "<a href='insert_GUI.html'>Go Back</a>";

    if (!is_numeric($id)) {
        die("Please enter valid Id</br>$back");
    }
    include 'connect.php';
    $conn = dbconnect();
    $sql = "INSERT INTO students VALUES($id,'$major','$minor')";

    if ($conn->query($sql) == TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error:<br>" . $conn->error;
    }
    echo "<br>$back";
    $conn->close();
}
