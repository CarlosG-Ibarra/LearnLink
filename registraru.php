<?php
session_start();
$idusuarios = $_SESSION['idusuario'];

    $servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE usuarios SET 
            es_asesor = '1',
            plan = '1' 
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
