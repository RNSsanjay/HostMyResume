<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Specify the file where data will be stored
    $file = 'D:\Projects\github\Web Developement\MyResume\contacts.txt';

    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect to a thank you page or display a message
    echo "<script>alert('Thank you for your message!'); window.location.href='Contact.html';</script>";
} else {
    echo "Invalid request method.";
}
?>
