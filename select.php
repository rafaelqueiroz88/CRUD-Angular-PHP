<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "remember_development";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$output = array();
$sql = "SELECT * FROM usuarios LIMIT 15";
$conn->query($sql);
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $output[] = $row;
    }
    echo json_encode($output);
}

$conn->close();