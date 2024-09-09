<?php
// Establish database connection
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "admission";  // Replace with your database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Retrieve form data
$password = $_POST['pass']; // Replace 'field1' with the name attribute of your input field
$Email = $_POST['email']; // Replace 'field2' with the name attribute of another input field


$tablename='logindata';
// Insert data into the database
$sql = "INSERT INTO $tablename (email,pasword) VALUES ('$Email','$password')";
if ($conn->query($sql) == TRUE) {
    // if ($conn->affected_rows > 0) {
    //     echo "Data inserted successfully";
    // } else {
    //     echo "No rows were affected";
    // }
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>