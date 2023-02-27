<?php
if (isset($_POST['search'])) {
    $id = $_POST['x'];
    $mj = $_POST['y'];
    $mn = $_POST['z'];
    $back = "<a href='search_GUI.html'>Go Back</a>";
    include 'connect.php';
    $con = dbconnect();
    if (empty($id) && empty($mj) && empty($mn)) {
        $sql = "SELECT * FROM students";
    }
    elseif (!empty($id) && empty($mj) && empty($mn)) {
        $sql = "SELECT * FROM students WHERE Id = $id";
    }
    elseif (empty($id) && !empty($mj) && empty($mn)) {
        $sql = "SELECT * FROM students WHERE `Major` = '$mj'";
    }
    elseif (empty($id) && empty($mj) && !empty($mn)) {
        $sql = "SELECT * FROM students WHERE `Minor` = '$mn'";
    }
    elseif (empty($id) && !empty($mj) && !empty($mn)) {
        $sql = "SELECT * FROM students WHERE `Major` = '$mj' AND `Minor` = '$mn'";
    }
    $res = $con->query($sql);
    if ($res->num_rows>0) {
        echo "<table border = '1'>";
        echo "<th>Id</th><th>Major</th><th>Minor</th>";
        while ($row = $res->fetch_assoc()) {
            $i = $row ["Id"];
            $j = $row ["Major"];
            $n = $row ["Minor"];
            echo "<tr><td>$i</td><td>$j</td><td>$n</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "No results found";
    }
}
    echo "<br>$back";
    $con->close();
