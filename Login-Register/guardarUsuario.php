<?php 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];	
$contrasena=$_POST['contrasena'];
$language=$_POST['language'];



$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$conn = new mysqli($servername, $username, $password,$dbname, );
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, correo,contrasena)
VALUES ('$nombre', '$correo','$contrasena')";

if ($conn->query($sql) === TRUE) {
  if ($language == 1) {
        echo "Nuevo registro creado exitosamente";
        header("Location: ESPLogin-Registrar.html");
    } elseif ($language == 2) {
        echo "New record created successfully";
        header("Location: ENLogin-Registrar.html");
    }
} else {
  if ($language == 1) {
        echo "Error creating record. Please try again.";
        header("Location: ESPLogin-Registrar.php");
    } elseif ($language == 2) {
        echo "Error creating record. Please try again.";
        header("Location: ENLogin-Registrar.html");
    } 
}

$conn->close();


 ?>