<?php
// Define your secret password
$secretPassword = "Winston";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredPassword = $_POST["password"];
    if ($enteredPassword == $secretPassword) {
        // Password is correct, grant access to your website
        header("Location: your_website_homepage.html");
        exit();
    } else {
        // Password is incorrect, redirect to the login page
        header("Location: login.html");
        exit();
    }
}
?>
