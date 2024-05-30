<?php
$servername = "193.203.166.22";
$username = "u666007820_Learnlink";
$password = "Integradora23#";
$dbname = "u666007820_Learnlink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idusuarios, nombre, correo, tel, es_asesor FROM usuarios";
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
<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Es Asesor</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $idusuarios = $row["idusuarios"];
        $htmlContent .= "<tr>";
        $htmlContent .= "<td>" . $idusuarios . "</td>";
        $htmlContent .= "<td>" . $row["nombre"] . "</td>";
        $htmlContent .= "<td>" . ($row["es_asesor"] ? 'Yes' : 'No') . "</td>";
        $htmlContent .= "<td>" . $row["correo"] . "</td>";
        $htmlContent .= "<td>" . $row["tel"] . "</td>";
        $htmlContent .= "<td><a href='eliminandoRegistro.php?idusuarios=$idusuarios'>Eliminar registro</a></td>";
        $htmlContent .= "</tr>";
    }
} else {
    $htmlContent .= "<tr><td colspan='6'>0 results</td></tr>";
}

$htmlContent .= '</tbody>
    </table>';

$conn->close();

echo $htmlContent;
?>
