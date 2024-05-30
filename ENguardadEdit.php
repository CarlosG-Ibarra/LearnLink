<?php
session_start();
$idusuarios = $_SESSION['idusuario'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $profesion = $_POST['profesion'];
    $experiencia = $_POST['experiencia'];

    if (!empty($_FILES['profile_picture']['name'])) {
        $targetDirectory = 'profilepics/'; 
        $targetFile = $targetDirectory . basename($_FILES['profile_picture']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES['profile_picture']['tmp_name']);
        if ($check === false) {
            echo 'Invalid file format.';
            header('Refresh:10; url=usuarioProfile.php');
            exit; 
        }

        $counter = 1;
        while (file_exists($targetFile)) {
            $targetFile = $targetDirectory . $counter . '_' . basename($_FILES['profile_picture']['name']);
            $counter++;
        }

        if (!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile)) {
            echo 'Error uploading the file.';
            header('Refresh:10; url=usuarioProfile.php');
            exit; 
        }

        $newProfilePicturePath = $targetFile;
    }

    $servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    if (isset($newProfilePicturePath)) {
        $sql = $conn->prepare("CALL guardadEditWithPicture(?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param('issssss', $idusuarios, $nombre, $correo, $tel, $profesion, $experiencia, $newProfilePicturePath);
    } else {
        $sql = $conn->prepare("CALL guardadEdit(?, ?, ?, ?, ?, ?)");
        $sql->bind_param('isssss', $idusuarios, $nombre, $correo, $tel, $profesion, $experiencia);
    }

    if ($sql->execute()) {
        echo 'Record updated successfully';
        header('Refresh:0; url=ENusuarioProfile.php');
    } else {
        echo 'Error: ' . $sql->error;
        header('Refresh:0; url=ENusuarioProfile.php');
    }

    $sql->close();
    $conn->close();
}
?>
