<?php
    // define parameters
    $hostname = 'localhost';
    $dbname = 'e-campus'; // 
    $username = 'root';
    $password = 'root';
    $port = 8889;

    // establish connection
    try {
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
