<?php
$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$language = $_POST['language'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Login Correcto";
    $nombre = $row["nombre"];
    $correo = $row["correo"];
    $tel = $row["tel"];
    $estrellas = $row["estrellas"];
    $credenciales = $row["credenciales"];
    $Horario = $row["Horario"];
    $imgprofile = $row["imgprofile"];
    $Temas = $row["Temas"];
    
    session_start();
    $_SESSION['idusuario'] = $row['idusuarios'];
    if ($language==1) {
      header("Refresh:0; url=../index.php");
    }else
    header("Refresh:0; url=../ENindex.php");
  }
} else {
  if ($language==1) {
    echo "Credenciales No Válidas";
  header("Refresh:3; url=ESPLogin-Registrar.html");
  } else
  echo "Invalid Credentials";
  header("Refresh:3; url=ENLogin-Registrar.html");

}

$conn->close();
?>
