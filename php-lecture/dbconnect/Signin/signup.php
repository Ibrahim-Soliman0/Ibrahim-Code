<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
</head>

<body>
    <h2>Sign up</h2>
    <form action="" method="post">
        <label>User name: </label>
        <input name="u" /><br /><br />
        <label>Password: </label>
        <input name="p" type="password" /><br /><br />]
        <input type="submit" name="signup" value="Sign up" />
    </form>
    <?php
    if (isset($_POST['signup'])) {
        $u = $_POST['u'];
        $p = $_POST['p'];
        include 'connect.php';
        $con = dbconnect();
        $sql = "INSERT INTO users VALUES('$u','$p')";
        if ($con->query($sql) == True) {
            echo "Sign UP Successfull";
        } else {
            echo "Sign UP error";
        }
    }
    ?>
</body>

</html>