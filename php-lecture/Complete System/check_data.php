<?php
    include 'dbconnect.php';
    function checkUsername($username){
        if (empty($username)) {
            return "Username is required";
        }
        $c = preg_match("/^[a-zA-Z] [a-zA-Z0-9]*$/",$username);
        if (!$c) {
            $errorMsg = "Username must start with a letter followed by 
                        zero or more letters/digits
                        <br>Special Symbols are NOT allowed";
            return $errorMsg;
        }
        $con = dbconnect();
        $sql = "SELECT * FROM users WHERE username = '$username';";
        $result = $con -> query($sql);
        if ($result -> num_rows > 0) {
            return "Username already exists";
        }
        return "";
    }
    function checkEmail($email){
        if (empty($email)) {
            return "Email is required";
        }
        $con = dbconnect();
        $sql = "SELECT * FROM users WHERE email = '$email';";
        $result = $con -> query($sql);
        if ($result -> num_rows > 0) {
            return "Email already exists";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid Email";
        }
        return "";
    }
    function checkPassword($password){
        if (empty($password)) {
            return "Password is required";
        }
        $uppercase  = preg_match('/[A-Z]/',$password);
        $lowercase  = preg_match('/[a-z]/',$password);
        $digit  = preg_match('/[0-9]/',$password);
        if (!$uppercase) {
            return "Password must contain at least one uppercase letter";
        }
        if (!$lowercase) {
            return "Password must contain at least one lowercase letter";
        }
        if (!$digit) {
            return "Password must contain at least one digit";
        }
        if (strlen($password) < 8) {
            return "Password must contain at least 8 characters length";
        }
        return "";
    }
