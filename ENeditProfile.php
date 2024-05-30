<?php 
session_start();

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
        $Temas = $row["Temas"];
    } 
} else {
    echo "0 results";
}
$conn->close();

function generateStarRating($estrellas)
{
    if ($estrellas == 0) {
        echo "No hay calificación de reseña disponible";
    } else {
        $html = '<div class="star-rating">';
        for ($i = 1; $i <= $estrellas; $i++) {
            $html .= '<span class="star">&#9733;</span>';
        }
        $html .= '</div>';
        return $html;
    }
}


function logout()
{
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>

<?php if (isset($_SESSION['idusuario']) && $es_asesor == 1): ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .star-rating {
            display: flex;
            font-size: 24px;
            color: #FFD700;
        }

        body {
            background: linear-gradient(to right, #FCD34C, ghostwhite);
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="ENindex.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="ENasesorias_test.php">Tutors</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $nombre; ?></li>
                        <li class="breadcrumb-item ms-auto"><a href="Login-Register/logout.php" onclick="logout()">Logout</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <form method="POST" action="ESPguardadEdit.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo (!empty($imgprofile) ? $imgprofile : 'photos/Default.png'); ?>" alt="avatar"
                             class="rounded-circle img-fluid profile-picture">
                            <br>
                            <input type="file" name="profile_picture" accept="image/*">
                            <br>
                            <br>
                            <input type="text" value="<?php echo $profesion; ?>" name="profesion">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" style="font-size: 14px; background-color: #3FA39A;">Save Changes</button>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0"><?php echo $correo; ?></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">+<?php echo $tel; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $nombre; ?>" name="nombre">
                                    <button type="submit" class="btn btn-primary" style="font-size: 14px; background-color: #3FA39A;">Save Changes</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $correo; ?>" name="correo">
                                    <input type="text" name="language" hidden value="2">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $tel; ?>" name="tel">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">My Credentials</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $credenciales; ?>" name="credenciales">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Time Availible</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $Horario; ?>" name="Horario">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Topics</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $Temas; ?>" name="Temas">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Chihuahua, Chihuahua</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1"></span> Experience</p>
                                    <input type="text" value="<?php echo $experiencia; ?>" name="experiencia" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1"></span> Stars</p>
                                    <?php
                                        echo generateStarRating($estrellas);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> 

<?php else: ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .star-rating {
            display: flex;
            font-size: 24px;
            color: #FFD700;
        }

        body {
            background: linear-gradient(to right, #FCD34C, ghostwhite);
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="ENindex.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="ENasesorias_test.php">Tutors</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $nombre; ?></li>
                        <li class="breadcrumb-item ms-auto"><a href="Login-Register/logout.php" onclick="logout()">Logout</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <form method="POST" action="ESPguardadEdit.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo (!empty($imgprofile) ? $imgprofile : 'photos/Default.png'); ?>" alt="avatar"
                            class="rounded-circle img-fluid profile-picture">
                            <br>
                            <input type="file" name="profile_picture" accept="image/*">
                            <br>
                            <br>
                            <input type="text" value="<?php echo $profesion; ?>" name="profesion">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" style="font-size: 14px; background-color: #3FA39A;">Save Changes</button>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0"><?php echo $correo; ?></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">+<?php echo $tel; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">FullName</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $nombre; ?>" name="nombre">
                                    <button type="submit" class="btn btn-primary" style="font-size: 14px; background-color: #3FA39A;">Save Changes</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $correo; ?>" name="correo">
                                    <input type="text" name="language" hidden value="2">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone Number</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $tel; ?>" name="tel">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Chihuahua, Chihuahua</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> 

<?php endif; ?>
