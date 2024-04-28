<?php
// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Crear un array con los datos del formulario
$formData = array(
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message
);

// Obtener el contenido actual del archivo JSON
$jsonFile = file_get_contents('datos.json');
$data = json_decode($jsonFile, true);

// Agregar los nuevos datos al array existente
$data[] = $formData;

// Convertir el array a formato JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Guardar los datos en el archivo JSON
file_put_contents('datos.json', $jsonData);

// Enviar una respuesta al cliente
echo "¡Datos almacenados correctamente en el archivo JSON!";
?>

