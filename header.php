<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="fotospagina/logo.png">

    <style>
        .header {
            background-color: #FCD34C;
            color: #ffffff;
            padding: 10px 0;
        }
    
        .logo {
            width: 200px; 
        }
    
        .btn-login, .btn-signup {
            margin-left: 10px; 
        }
    
        .nav-link.disabled {
            color: #ffffff;
        }
        .nav-item.dropdown {
            color: black;
        }

       
        .navbar-nav .nav-item a {
            color: #3fa39a; 
            
        }

       
        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-btn {
            padding: 8px;
            background-color: #FCD34C;
            border: 1px solid #FCD34C;
            border-radius: 4px;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .dropdown-item {
            padding: 10px;
            text-decoration: none;
            display: block;
            color: #333;
        }
        .dropdown-item:hover {
            background-color: #f5f5f5;
        }
        .second-dropdown-btn {
            padding: 8px;
            background-color: #3FA39A;
            border: 1px solid #3FA39A;
            border-radius: 4px;
            cursor: pointer;
        }

        .second-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .second-dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .second-dropdown-content a:hover {
            background-color: #3FA39A;
        }

        .second-dropdown:hover .second-dropdown-content {
            display: block;
        }

        .second-dropdown:hover .second-dropdown-btn {
            background-color:#3FA39A;
        }
    </style>
</head>
<body>
    <?php if ($language==1) {
    ?>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="fotospagina/logo.png" alt="logo" class="logo">
                </div>
                <div class="col-6">
                    <h3 class="text-white"> Learn Link Chihuahua </h3>
                </div>
                <div class="col-4 text-right">
                    <?php
                    session_start();
                    if (isset($_SESSION['idusuario'])) {
                        $userId = $_SESSION['idusuario'];
                        include("conn.php"); 


                        echo '<div class="dropdown">';
                        echo '<div class="dropdown-btn"><img src="' . (!empty($imgprofile) ? $imgprofile : 'photos/Default.png') . '" alt="avatar" class="profile-picture"></div>';
                        echo '<div class="dropdown-content">';
                        echo '<a class="dropdown-item" href="ESPusuarioProfile.php">Perfil</a>';
                        echo '<a class="dropdown-item" href="Login-Register/logout.php">Logout</a>';
                        echo '</div>';
                        echo '</div>';

                    } else {
                        echo '<a href="Login-Register/ESPLogin-Registrar.html" class="btn btn-light btn-login"> Iniciar Sesión/ Registrar </a>';
                        $es_asesor=0;
                    }
                    ?>
                    <div class="dropdown second-dropdown">
                        <button class="second-dropdown-btn"><?php if ($language == 1) {
                            echo "ESP";
                            
                        }elseif ($language ==2) {
                            echo "EN";
                            
                        } ?></button>
                        <div class="second-dropdown-content">
                            <?php
                                if ($fileName == 'index.php') {
                                    echo '<a href="' . $fileName . '">ESP</a>';
                                    echo '<a href="EN' . $fileName . '">EN</a>';
                                } else {
                                    echo '<a href="ESP' . $fileName . '">ESP</a>';
                                    echo '<a href="EN' . $fileName . '">EN</a>';
                                }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                      </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ESPasesorias_test.php">Asesorias</a></li>
                    <li><a class="dropdown-item" href="ESPcursos.php">Cursos</a></li>
                    <li><a class="dropdown-item" href="ESPuniversidades.php">Carreras universitarias</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ESPnosotros.php">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ESPcontacto.php">Contacto</a>
                  </li> 
                  <?php
                    if ($es_asesor == 0 || empty($es_asesor)) {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="ESPpricing.php">Ver Planes</a>
                        </li>';
                    }
                    ?>

              </ul>
              </div>
            </div>
          </nav> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php 
    }elseif($language==2) {
        ?>
        <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="fotospagina/logo.png" alt="logo" class="logo">
                </div>
                <div class="col-6">
                    <h3 class="text-white"> Learn Link Chihuahua </h3>
                </div>
                <div class="col-4 text-right">
                    <?php
                    session_start();
                    if (isset($_SESSION['idusuario'])) {
                        $userId = $_SESSION['idusuario'];
                        include("conn.php"); 


                        echo '<div class="dropdown">';
                        echo '<div class="dropdown-btn"><img src="' . (!empty($imgprofile) ? $imgprofile : 'photos/Default.png') . '" alt="avatar" class="profile-picture"></div>';
                        echo '<div class="dropdown-content">';
                        echo '<a class="dropdown-item" href="ENusuarioProfile.php">Profile</a>';
                        echo '<a class="dropdown-item" href="Login-Register/logout.php">Logout</a>';
                        echo '</div>';
                        echo '</div>';

                    } else {
                        echo '<a href="Login-Register/ENLogin-Registrar.html" class="btn btn-light btn-login"> Login/Register </a>';
                        $es_asesor=0;

                    }
                    ?>
                    <div class="dropdown second-dropdown">
                        <button class="second-dropdown-btn"><?php if ($language == 1) {
                            echo "ESP";
                            
                        }elseif ($language ==2) {
                            echo "EN";
                            
                        } ?></button>
                        <div class="second-dropdown-content">
                            <?php
                                if ($fileName == 'index.php') {
                                    echo '<a href="' . $fileName . '">ESP</a>';
                                    echo '<a href="EN' . $fileName . '">EN</a>';
                                } else {
                                    echo '<a href="ESP' . $fileName . '">ESP</a>';
                                    echo '<a href="EN' . $fileName . '">EN</a>';
                                }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ENindex.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                      </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ENasesorias_test.php">Tutoring</a></li>
                    <li><a class="dropdown-item" href="ENcursos.php">Courses</a></li>
                    <li><a class="dropdown-item" href="ENuniversidades.php">Universities</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ENnosotros.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ENcontacto.php">Contact Us</a>
                  </li> 
                  <?php
                    if ($es_asesor == 0 || empty($es_asesor)) {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="ENpricing.php">View Plans</a>
                        </li>';
                    }
                    ?>

                  
              </ul>
              </div>
            </div>
          </nav> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php 
    } ?>

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        var dropdown = document.querySelector('.dropdown');
        if (dropdown) {
            var dropdownBtn = dropdown.querySelector('.dropdown-btn');
            var dropdownContent = dropdown.querySelector('.dropdown-content');

            dropdownBtn.addEventListener('click', function () {
                dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
            });

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    dropdownContent.style.display = 'none';
                }
            });
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

