

<?php
$filePath = 'batteryData.json';

// Lit le fichier et renvoie le contenu
$data = file_get_contents($filePath);
echo $data;
?>
