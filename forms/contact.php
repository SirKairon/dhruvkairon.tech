<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Email address where you want to receive messages
    $to = "dhruvkairon@gmail.com";
    
    // Email subject
    $email_subject = "New Message from $name: $subject";
    
    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
    
    // Headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    // Send email
    mail($to, $email_subject, $email_body, $headers);
    
    // Return success message
    echo "success";
} else {
    // Not a POST request, so return an error message
    echo "error";
}
?>
