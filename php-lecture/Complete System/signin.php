<?php
include 'dbconnect.php';
include 'encrypt.php';
?>
<HTML>

<head>
    <style>
        Span {
            color: red;
        }
    </style>
</head>

<BODY>
    <h2> Sign in </h2>
    <?php
    $usernameErr = "";
    $passwordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        if (empty($username)) {
            $usernameErr = "Username/Email required";
        }
        if (empty($password)) {
            $passwordErr = "Password required";
        }
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <Span>* required field</Span>
        <br><br>

        Username or Email address
        <input name='username' value="<?php if (isset($_COOKIE["username"])) {
                                            echo $_COOKIE["username"];
                                        } ?>" />
        <Span>* <?php echo $usernameErr; ?></Span>
        <br><br>

        Password <input name='password' type='password' value="<?php if (isset($_COOKIE["password"])) {
                                                                    echo $_COOKIE["password"];
                                                                } ?>" />
        <Span>* <?php echo $passwordErr; ?></Span>
        <br><br>

        <input type="checkbox" name="remember" checked /> Remember me
        <br><br>

        <input type='submit' name='submit' />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($usernameErr) && empty($passwordErr)) {
            if (!empty($_POST["remember"])) {
                setcookie("username", $_POST["username"], time() + 86400 * 90);
                setcookie("password", $_POST["password"], time() + 86400 * 90);
            } else {
                setcookie("username", "");
                setcookie("password", "");
            }

            $encryptedPassword = encryptPassword($password);

            $con = dbconnect();

            if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
                $sql = "Select * From users Where email='$username' And password = '$encryptedPassword'";
            } else {
                $sql = "Select * From users Where username='$username' And password = '$encryptedPassword'";
            }

            $res = $con->query($sql);
            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();
                $verified = $row['verified'];
                if ($verified == 1) {
                    echo "Signin successfully";
                    //$_SESSION['u'] = $username;
                    //header("Location: main.php");
                    //exit;
                } else {
                    echo "Please verify your email";
                    exit;
                }
            } else {
                echo "Invalid username/email";
            }
        }
    }
    ?>
</BODY>

</HTML>