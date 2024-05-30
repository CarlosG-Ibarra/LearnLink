<?php
$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['idcursos'])) {
    $idcursos = $_GET['idcursos'];

    $stmt = $conn->prepare("DELETE FROM cursos WHERE idcursos = ?");
    $stmt->bind_param("i", $idcursos);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
                header('Refresh:0; url=administracion.php');

    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request. Please provide a valid idcursos parameter.";
}

$conn->close();
?>
