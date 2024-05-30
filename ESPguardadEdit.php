<?php
session_start();
if (isset($_SESSION['idusuario'])) {
    $idusuarios = $_SESSION['idusuario'];
} else {
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $profesion = $_POST['profesion'];
    $experiencia = $_POST['experiencia'];
    $credenciales = $_POST['credenciales'];
    $Horario = $_POST['Horario'];
    $Temas = $_POST['Temas'];
    $language = $_POST['language'];

    $newProfilePicturePath = null;
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
    $dbname = "u666007820_Learnlink";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    if ($newProfilePicturePath !== null) {
        $sqlQuery = "UPDATE usuarios SET nombre=?, correo=?, tel=?, profesion=?, experiencia=?, credenciales=?, Horario=?, Temas=?, imgprofile=? WHERE idusuarios=?";
        $sql = $conn->prepare($sqlQuery);
        $sql->bind_param('sssssssssi', $nombre, $correo, $tel, $profesion, $experiencia, $credenciales, $Horario, $Temas, $newProfilePicturePath, $idusuarios);
    } else {
        $sqlQuery = "UPDATE usuarios SET nombre=?, correo=?, tel=?, profesion=?, experiencia=?, credenciales=?, Horario=?, Temas=? WHERE idusuarios=?";
        $sql = $conn->prepare($sqlQuery);
        $sql->bind_param('ssssssssi', $nombre, $correo, $tel, $profesion, $experiencia, $credenciales, $Horario, $Temas, $idusuarios);
    }

    if ($sql->execute()) {
        if ($language == 1) {
            header("Refresh:0; url=ESPusuarioProfile.php");
        } else {
            header("Refresh:0; url=ENusuarioProfile.php");
        }
    } else {
        echo 'Error: ' . $sql->error;
        header('Refresh:10; url=ESPusuarioProfile.php');
    }

    $sql->close();
    $conn->close();
}
?>
