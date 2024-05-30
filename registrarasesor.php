<?php
session_start();
$idusuarios = $_SESSION['idusuario'];

    $profesion = htmlspecialchars($_POST["profesion"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $credenciales = htmlspecialchars($_POST["credenciales"]);
    $Temas = htmlspecialchars($_POST["Temas"]);
    $Horario = htmlspecialchars($_POST["Horario"]);





    $servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE usuarios SET 
            profesion = '$profesion', 
            tel = '$tel', 
            credenciales = '$credenciales', 
            Temas = '$Temas',
            es_asesor = '1', 
            Horario = '$Horario' 
        WHERE idusuarios = $idusuarios";


    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
      header('Refresh:0; url=ESPusuarioProfile.php');

    } else {
      echo "Error updating record: " . $conn->error;
      header('Refresh:0; url=ESPusuarioProfile.php');
    }

    $conn->close();

    
    exit();

?>
