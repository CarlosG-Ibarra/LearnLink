<?php
$folderPath = 'displayinfo'; 

$files = scandir($folderPath);

$files = array_diff($files, array('..', '.'));

foreach ($files as $file) {
    echo "<a href='{$folderPath}/$file'>$file</a><br>";
}
?>
