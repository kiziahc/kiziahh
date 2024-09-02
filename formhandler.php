<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {

$name = htmlspecialchars(trim($_POST['name']));
$email =filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message']));

if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email form";
    exit;


    echo "<h2>Thank you for contacting us, $name!</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

}else{
    echo "Invalid request method|";
}
?>