<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 19.12.2018.
 * Time: 20:14
 */

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
  //      http_response_code(400);
        echo "Došlo je do problema prilikom slanja vašeg pitanja, molimo Vas osvežite stranu i pokušajte ponovo.";
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "slovoslaganje@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>". "\r\n" .
        "CC: petar.prodanovic@gmail.com";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
//        http_response_code(200);
        echo "Hvala! Vaša poruka je uspešno poslata, očekujte odgovor u najkraćem roku.";
    } else {
        // Set a 500 (internal server error) response code.
//        http_response_code(500);
        echo "Trenutno nismo u mogućnosti da obradimo vaš zahtev.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
//    http_response_code(403);
    echo "Došlo je do problema prilikom slanja vašeg pitanja, molimo Vas osvežite stranu i pokušajte ponovo.";
}

?>