<?php

function dbconnect()
{
    $con = new mysqli("localhost", "root", "", "mydb");
    if ($con->connect_error) {
        die("Connection faild" . $con->connect_error);
    }
    return $con;
}
