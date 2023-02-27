<?php
include 'dbconnect.php';
include 'encrypt.php';
include 'check_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Complete System</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h2> Sign Up </h2>
    <?php
    $usernameErr = "";
    $emailErr = "";
    $passwordErr = "";
    $passwordConErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST["username"]);
        $usernameErr = checkUsername($username);
        $eamil = trim($_POST["email"]);
        $emailErr = checkEmail($email);
        $password = trim($_POST["password"]);
        $passwordErr = checkPassword($password);
        $passwordConErr = trim($_POST["passwordConf"]);
        if ($passwordConf != $password) {
            $passwordConErr = "Password and its confirmation do NOT match";
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <span>* required field</span>
        <br><br>
        <label>Username </label>
        <input type="text" name="username" value="<?php echo $username;?>">
        <span>* <?php echo $usernameErr;?></span>
        <br><br>
        <label>Email address </label>
        <input type="text" name="email" value="<?php echo $email;?>">
        <span>* <?php echo $emailErr;?></span>
        <br><br>
        <label>Password </label>
        <input type="password" name="password" value="<?php echo $password;?>">
        <span>* <?php echo $passwordErr;?></span>
        <br><br>
        <label>Password </label>
        <input type="password" name="passwordConf" value="<?php echo $passwordConErr;?>">
        <span>* <?php echo $passwordConfErr;?></span>
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($usernameErr) &&  empty($emailErr) && empty($passwordErr) && empty($passwordConfErr)){
            $encryptedPassword = encryptPassword($password);
            $token = md5(mt_rand(0,1000));
            $sql = "INSERT INTO users VALUES('$username','$email',$encryptedPassword','0','$token')";
            $con = dbconnect();
            if ($con->query($sql) == TRUE) {
                sendVerificationEmail($email,$token);
            }
            else{
                echo "Error: <br> . $con->error;";
        }
    }
    function sendVerificationEmail($email,$token){
        $to = $email;
        $subject = 'Signup | Verfication';
        $message = "Please click  this link below to activate your account:<br>";
        $message .= "https://drkhaled2022.000webhostapp.com/signup_system/verify_email.php?token=$token&email=$email";
        $headers = "Connect-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:noreply@yourwebsite.com" . "\r\n";
        if (mail($to,$subject,$message,$headers)) {
            echo "A verfication email was sent, please verfiy your email";
        }
        else {
            echo "Failed to send the verfication email"; 
        }
    }
    ?>
</body>
</html>