<?php
$servername = "localhost";
$username = "root";
$password = "9528176114";
$dbname = "assigment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
// Get form data
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



 if (strlen($phone) !== 10 || !ctype_digit($phone)) {
        echo "Invalid Phone number . Please enter the 10  digit phone number.";
    } else {
        
    }



$sql = "INSERT INTO contact_form (fullname, phone, email, subject, message) 
        VALUES ('$fullname', '$phone', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
