<?php

// Data retrieval from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send email
mail('k.oesterlin@web.de', 'Kontaktformular', "Name: $name\nE-Mail: $email\nTelefon: $phone\nNachricht: $message");

// Success message display
echo "Die E-Mail wurde erfolgreich gesendet.";

?>