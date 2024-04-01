<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $ipreloj = $_POST["ipreloj"];
    $mensaje = $_POST["mensaje"];

    // Realizar cualquier procesamiento adicional aquí

    // Imprimir los datos recibidos (puedes cambiar esto según tus necesidades)
    echo "Nombre: " . $nombre . "<br>";
    echo "ipreloj: " . $ipreloj . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
}
?>