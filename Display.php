<div class="search-container">
    <input type="text" class="search-input" >
    <button class="search-button">&#128269;</button>
</div>
<br></br>



<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .profiles-wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .profile-container {
            text-align: center;
            background-color: #e0ddd7;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            height: 300px; 
            margin: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s; 
        }

        .profile-container:hover {
            transform: scale(1.05); 
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .profile-name {
            font-size: 1.5em;
            margin-top: 10px;
            font-weight: bold;
            overflow: hidden;
            text-overflow: ellipsis; 
            white-space: nowrap; 
        }

        .profile-description {
            font-size: 1em;
            margin-top: 10px;
            color: black;
            overflow: hidden;
            text-overflow: ellipsis; 
            white-space: nowrap; 
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
            border-radius: 5px;
            margin: 0 5px;
        }

        .pagination a:hover {
            background-color: #ddd;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    
    <a id="top"></a>

    <div class="profiles-wrapper">
    <?php
    $servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $items_per_page = 15; 
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    $offset = ($page - 1) * $items_per_page;

    $sql = "SELECT * FROM usuarios WHERE es_asesor = 1 AND plan = 2 LIMIT $items_per_page OFFSET $offset";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($language == 1) {
                echo '
                    <a href="ESPProfile.php?idusuarios=' . $row["idusuarios"] . '">
                        <div class="profile-container">
                            <img class="profile-picture" src="' . (!empty($row["imgprofile"]) ? $row["imgprofile"] : 'photos/Default.png') . '" alt="Profile Picture">
                            <div class="profile-name">' . $row["nombre"] . '</div>
                            <div class="profile-description">' . $row["profesion"] . '</div>
                        </div>
                    </a>';
            } else {
                echo '
                    <a href="ENProfile.php?idusuarios=' . $row["idusuarios"] . '">
                        <div class="profile-container">
                            <img class="profile-picture" src="' . (!empty($row["imgprofile"]) ? $row["imgprofile"] : 'photos/Default.png') . '" alt="Profile Picture">
                            <div class="profile-name">' . $row["nombre"] . '</div>
                            <div class="profile-description">' . $row["profesion"] . '</div>
                        </div>
                    </a>';
            }
        }
    } else {
        echo "<h4>No Hay Resultados</h4>";
    }
    $conn->close();
    ?>

    
</div>
    <div class="pagination">
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql_count = "SELECT COUNT(*) as count FROM usuarios WHERE es_asesor = 1";
        $result_count = $conn->query($sql_count);
        $row_count = $result_count->fetch_assoc();
        $total_pages = ceil($row_count["count"] / $items_per_page);

        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = ($i == $page) ? 'active' : '';
            echo '<a class="' . $active_class . '" href="?page=' . $i . '#top">' . $i . '</a>';
        }
        $conn->close();
        ?>
    </div>
    

</body>
</html>
