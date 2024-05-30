<?php
require_once('db_connection.php');

$query = "SELECT id_asesor, nombre FROM asesores";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(array()); 
}

$conn->close();
?>
