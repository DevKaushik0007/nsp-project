<?php
$firstName = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];
$conn = new mysqli('localhost', 'root', '', 'form');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $email, $password);
    $stmt->execute();
    echo "Registration Successful...";
    $stmt->close();
    $conn->close();
}
?>