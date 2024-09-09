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
$name = $_POST['name']; // Replace 'field1' with the name attribute of your input field
$fname = $_POST['fname']; // Replace 'field2' with the name attribute of another input field
$mname = $_POST['mname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$class = $_POST['class'];
$address = $_POST['address'];

// Insert data into the database
$sql = "INSERT INTO data (Full_Name,Father_Name,Mother_Name,Phone_No,Email,Class,S_Address) VALUES ('$name', '$fname','$mname','$contact','$email','$class','$address')";
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