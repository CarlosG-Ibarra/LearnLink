<?php 

$idusuarios = $_SESSION['idusuario']; 
if (empty($idusuarios)) {
  echo "No se encontró Usuario";
  header("Refresh:2; url=index.php");
  exit();
}

$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE idusuarios = $idusuarios";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $correo = $row["correo"];
        $tel = $row["tel"];
        $profesion = $row["profesion"];
        $estrellas = $row["estrellas"];
        $credenciales = $row["credenciales"];
        $Horario = $row["Horario"];
        $es_asesor = $row["es_asesor"];
        $experiencia = $row["experiencia"];
        $imgprofile = $row["imgprofile"];
    } 
} else {
    echo "0 results";
}
$conn->close();
?>