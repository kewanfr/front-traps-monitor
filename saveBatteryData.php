<?php
// Assurez-vous que le fichier data.json est accessible en écriture par le serveur web.
$filePath = 'batteryData.json';

// Récupère les données POST et les décode
$data = json_decode(file_get_contents('php://input'), true);

// Lit le fichier actuel
$currentData = json_decode(file_get_contents($filePath), true);
if (!$currentData) {
    $currentData = [];
}

// Ajoute les nouvelles données
$currentData[] = $data;

// Sauvegarde les données mises à jour dans le fichier
file_put_contents($filePath, json_encode($currentData));

echo "Données sauvegardées avec succès";
?>
