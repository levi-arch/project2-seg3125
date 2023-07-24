<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data and take appropriate actions (e.g., send an email).
    // You can use the $name, $email, and $message variables to send the message.
    // Example email sending code:
    // mail($email, "Message from $name", $message);
}
?>
