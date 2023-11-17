<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperamos los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellidos = htmlspecialchars($_POST["apellidos"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $region = htmlspecialchars($_POST["region"]);
    $comentarios = htmlspecialchars($_POST["comentarios"]);

    // Imprimimos los datos en la pantalla (en un entorno de producción, aquí realizarías la lógica adicional)
    echo "<h2>Datos del formulario:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Región:</strong> $region</p>";
    echo "<p><strong>Comentarios:</strong> $comentarios</p>";
} else {
    // Si el formulario no ha sido enviado, redirigimos a la página de inicio o realizamos alguna acción adecuada
    header("Location: index.html");
    exit();
}
?>