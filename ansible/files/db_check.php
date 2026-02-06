<?php
$host = getenv('DB_HOST');
$conn = new mysqli($host, "admin", "Admin12345!");

if ($conn->connect_error) {
    die("Database Connection Failed");
}

echo "Database Connected Successfully";
?>
