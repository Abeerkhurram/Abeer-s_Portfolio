<?php
$receiving_email_address = 'abeerkhurram1295@gmail.com';

// Check if the PHP Email Form library file exists
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

// Create an instance of the PHP_Email_Form class
$contact = new PHP_Email_Form;


// Set properties of the PHP_Email_Form class
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];



// Add messages to the PHP_Email_Form instance
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Echo the result of sending the email
echo $contact->send();
?>
