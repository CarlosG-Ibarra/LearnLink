<?php
$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idcursos, nombrecursos, compania, linkapagina FROM cursos";
$result = $conn->query($sql);

$htmlContent = '<style>
    h1 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    td a {
        display: inline-block;
        padding: 8px 12px;
        background-color: #e44d26;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    td a:hover {
        background-color: #d14021;
    }
</style>
<h1>Cursos Informacion</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Curso Name</th>
            <th>Duration</th>
            <th>Instructor</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $idcursos = $row["idcursos"];
        $htmlContent .= "<tr>";
        $htmlContent .= "<td>" . $idcursos . "</td>";
        $htmlContent .= "<td>" . $row["nombrecursos"] . "</td>";
        $htmlContent .= "<td>" . $row["compania"] . "</td>";
        $htmlContent .= "<td>" . $row["linkapagina"] . "</td>";
        $htmlContent .= "<td><a href='eliminandoRegistroCursos.php?idcursos=$idcursos'>Eliminar registro</a></td>";
        $htmlContent .= "</tr>";
    }
} else {
    $htmlContent .= "<tr><td colspan='5'>0 results</td></tr>";
}

$htmlContent .= '</tbody>
    </table>';

$conn->close();

echo $htmlContent;
?>
