<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web2";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username, $password);
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>