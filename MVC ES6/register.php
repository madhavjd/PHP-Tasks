<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$hobbies = implode(', ', $_POST['hobbies']); // Convert hobbies array to comma-separated string

// Upload profile picture
$profilePicturePath = '';
if ($_FILES['profile_picture']['name']) {
    $profilePicturePath = 'uploads/' . $_FILES['profile_picture']['name'];
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], $profilePicturePath);
}

$sql = "INSERT INTO users (username, password, email, phone, birthdate, gender, city, profile_picture, hobbies)
        VALUES ('$username', '$password', '$email', '$phone', '$birthdate', '$gender', '$city', '$profilePicturePath', '$hobbies')";

if ($conn->query($sql) === TRUE) {
    $response = ['success' => true];
} else {
    $response = ['success' => false];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>