<?php
$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['idusuarios'])) {
    $idusuarios = $_GET['idusuarios'];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE idusuarios = ?");
    $stmt->bind_param("i", $idusuarios);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
        header('Refresh:0; url=administracion.php');
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request. Please provide a valid idusuarios parameter.";
}

$conn->close();
?>
