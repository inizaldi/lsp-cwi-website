<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_cwi";
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn) {
  echo "";
} else if($conn -> connect_errno){
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

?>