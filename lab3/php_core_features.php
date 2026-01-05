<?php
/*
====================================================
PHP Core Features Demonstration
Student Name: Alzobair Abbas
====================================================
*/


/* ================================================
   DATE & TIME FUNCTIONS
================================================ */

echo "Current Date & Time: " . date("Y-m-d H:i:s") . "<br>";
echo "Current Timestamp: " . time() . "<br>";

$timestamp = mktime(15, 30, 0, 12, 25, 2025);
echo "Custom Date: " . date("Y-m-d H:i:s", $timestamp) . "<br>";

$nextFriday = strtotime("next Friday");
echo "Next Friday: " . date("Y-m-d", $nextFriday) . "<br>";

echo "Date Information:<br>";
print_r(getdate());
echo "<br>";

$date1 = date_create("2025-12-01");
$date2 = date_create("2025-12-19");
$diff = date_diff($date1, $date2);

echo "Difference in days: " . $diff->format("%a days") . "<br>";

sleep(1);


/* ================================================
   FILE HANDLING
================================================ */

$filename = "example.txt";

file_put_contents($filename, "Welcome to PHP File Handling!\n");
echo nl2br(file_get_contents($filename));

if (file_exists($filename) && is_file($filename)) {
    echo "<br>File exists and is valid.<br>";
}


/* ================================================
   DIRECTORY HANDLING
================================================ */

$folder = "myfolder";

if (!is_dir($folder)) {
    mkdir($folder);
    echo "Folder created successfully.<br>";
}

echo "Folder contents:<br>";
print_r(scandir($folder));
echo "<br>";


/* ================================================
   SIMPLE LOG SYSTEM
================================================ */

$logFile = "log.txt";

if (!file_exists($logFile)) {
    file_put_contents($logFile, "Log file created\n");
} else {
    file_put_contents($logFile, "New log entry added\n", FILE_APPEND);
}


/* ================================================
   DATABASE CONNECTION USING MySQLi
================================================ */

$host = "localhost";
$user = "root";
$password = "";
$database = "php_assignment_db";

/* Connect without selecting database */
$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* Create database if not exists */
$sql = "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8 COLLATE utf8_general_ci";
$conn->query($sql);

/* Select database */
$conn->select_db($database);
$conn->set_charset("utf8");

echo "Connected to database using MySQLi<br>";


/* ================================================
   DATABASE CONNECTION USING PDO
================================================ */

try {
    /* Connect without database */
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Create database */
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8 COLLATE utf8_general_ci");

    /* Connect to database */
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to database using PDO<br>";

} catch (PDOException $e) {
    echo "PDO Error: " . $e->getMessage();
}


/* ================================================
   END OF FILE
================================================ */
?>
