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

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";
$conn->query($sql);
$result = $conn->query($sql);

$conn->close();