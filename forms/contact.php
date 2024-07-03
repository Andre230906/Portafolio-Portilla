<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$formData = array(
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message
);

$jsonFile = file_get_contents('datos.json');
$data = json_decode($jsonFile, true);

$data[] = $formData;

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('datos.json', $jsonData);

echo "¡Datos almacenados correctamente en el archivo JSON!";
?>

