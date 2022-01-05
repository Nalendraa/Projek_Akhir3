<?php
$servername = "localhost";
$database = "u1694897_d_reg_3_db";
$username = "u1694897_d_reg_3";
$password = "jtipolije";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
