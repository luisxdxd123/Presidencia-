<?php
$servidor = "localhost"; // Servidor de MySQL en XAMPP
$usuario = "root"; // Usuario por defecto en XAMPP
$contrasena = ""; // Por defecto en XAMPP, la contraseña está vacía
$base_datos = "mi_base_datos"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

// Cerrar conexión (opcional)
$conexion->close();
?>
