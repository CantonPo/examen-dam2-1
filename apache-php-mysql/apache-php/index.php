<?php
$servername = "mysql";    
$username = "user";     
$password = "password";       
$dbname = "testdb"; 

//Crear conexión 
$conn = new mysqli($servername, $username, $password, $dbname);

//Y aquí comprobamos la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
echo "Conexión exitosa a la base de datos.";
$conn->close();
?>