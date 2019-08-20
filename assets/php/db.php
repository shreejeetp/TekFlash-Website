<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "teksplash";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO alumni (name, email,rid,mno,caddr,cjob)
VALUES ('"+$_POST['name']+"', '"+$_POST['email']+"', '"+$_POST['rid']+"', '"+$_POST['mno']+"', '"+$_POST['caddr']+"', '"+$_POST['cjob']+"')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 