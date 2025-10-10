<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ruta de la carpeta donde se guardarán los archivos de audio
$carpetaDestino = 'audios/';

// Genera un nombre único para el archivo basado en la fecha y hora actual
$nombreArchivo = $_POST['celular'].'.webm';
// Ruta completa del archivo de destino
$rutaArchivo = $carpetaDestino . $nombreArchivo;

// Mueve el archivo temporal a la carpeta de destino
if (move_uploaded_file($_FILES['audio']['tmp_name'], $rutaArchivo)) {

} else {
    echo 'Error al guardar el archivo.';
}
