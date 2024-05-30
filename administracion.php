<?php 
session_start();

$idusuarios = $_SESSION['idusuario']; 
if (empty($idusuarios)) {
  echo "No se encontró usuario";
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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style >
    
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .sidebar {
        background-color: #333;
        color: white;
        width: 200px;
        height: 100vh;
        padding: 1em;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .profile {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-options {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .profile-link,
    .home-link {
        text-decoration: none;
        padding: 10px;
        margin: 5px;
        color: #fff; 
        background-color: #3498db;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .profile-link:hover,
    .home-link:hover {
        background-color: #2980b9;
    }


    

    .options p {
        margin: 10px 0;
        cursor: pointer;
    }

    .content {
        flex: 1;
        padding: 1em;
    }


</style>
<body>
    <div class="sidebar">
        <div class="profile">
            <img src="<?php echo $imgprofile; ?>" alt="Profile Picture">
            <div class="profile-options">
                <div class="profile-options">
                    <a href="ESPusuarioProfile.php" class="profile-link">&#x1F464; Perfil</a>
                    <a href="index.php" class="home-link">&#x1F3E0; Inicio</a>
                </div>

            </div>
        </div>
        <div class="options">
            <p onclick="loadContent('usuarios')">&#x1F464; Usuarios</p>
            <p onclick="loadContent('universities')">&#x1F30D; Universidades</p>
            <p onclick="loadContent('cursos')">&#x1F4D6; Cursos</p>
        </div>

    </div>

    <div class="content" id="mainContent">
        
        <h1>Bienvenido/a a la Página de Administración</h1>  
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            loadContent('home');
        });

        function loadContent(tab) {
            var contentElement = document.getElementById('mainContent');

            switch (tab) {
                case 'usuarios':
                    fetch('conusuarios.php')
                        .then(response => response.text())
                        .then(data => {
                            contentElement.innerHTML = data;
                        })
                        .catch(error => console.error('Error:', error));
                    break;
                case 'universities':
                    fetch('universities.php')
                        .then(response => response.text())
                        .then(data => {
                            contentElement.innerHTML = data;
                        })
                        .catch(error => console.error('Error:', error));
                    break;
                case 'cursos':
                    fetch('cursos.php')
                        .then(response => response.text())
                        .then(data => {
                            contentElement.innerHTML = data;
                        })
                        .catch(error => console.error('Error:', error));
                    break;
                default:
                    contentElement.innerHTML = '<h1>Bienvenido/a a la Página de Administración</h1>';
                    break;
            }
        }
    </script>
</body>
</html>
