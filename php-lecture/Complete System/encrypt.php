<?php
    const SECRETKEY = "EF55pL#+2eH7QBz@";
    function encryptPassword($password){
    $encryptedPassword = openssl_encrypt($password, "AEs-128-ECB", SECRETKEY);
    return $encryptedPassword;
    }
?>