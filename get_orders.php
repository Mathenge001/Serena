<?php
// Connect to the database
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_database_username';
$pass = 'your_database_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}

// Query to get orders
$stmt = $pdo->query("SELECT * FROM orders");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output orders as JSON
echo json_encode($orders);
