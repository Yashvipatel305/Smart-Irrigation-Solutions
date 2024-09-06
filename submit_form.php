<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contact Form Handling
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // Here you would typically send the email or save the data to a database
        // For simplicity, we'll just echo the data

        echo "<h1>Contact Form Submission</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
    }

    // Login Form Handling
    if (isset($_POST['login-email']) && isset($_POST['login-password'])) {
        $login_email = htmlspecialchars($_POST['login-email']);
        $login_password = htmlspecialchars($_POST['login-password']);

        // Here you would typically validate the credentials and start a session
        // For simplicity, we'll just echo the data

        echo "<h1>Login Form Submission</h1>";
        echo "<p>Email: $login_email</p>";
        echo "<p>Password: $login_password</p>";
    }
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
