<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Sign in</title>
  </head>
  <body>
  <h2>Sign in</h2>
    <form method="post">
    <label>User name: </label>
    <input name="u" /><br /><br />
    <label>password: </label>  
    <input name="p" type="password" /><br /><br />
    <input type="submit" name="signin" value="Sign in" />
    </form>
    <?php
if (isset($_POST['signup'])) {
    $u = $_POST['u'];
    $p = $_POST['p'];
    include 'connect.php';
    $con = dbconnect();
    $sql = "SELECT * FROM users WHERE `username`= '$u'AND `password`= '$p'";
    $res = $con -> query($sql);
    if ($res-> num_rows>0) {
      $_SESSION['u'] = $u;
      header("Location:main.php");
      exit;
    }
    else {
        echo "Invalid Username and/or Password";
    }
}
?>
  </body>
</html>
