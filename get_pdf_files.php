<<?php
$directory = 'demandes/'; // Spécifiez le chemin absolu de votre dossier

if (is_dir($directory)) {
    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $filePath = $directory . '/' . $file;
            $fileCreationTime = date("Y-m-d H:i:s", filectime($filePath));
            
            echo '<tr>';
            echo '<td><a href="' . $filePath . '" download>' . $file . '</a></td>';
            echo '<td style="margin-left: 140px;">' . $fileCreationTime . '</td>';
            echo '</tr>';
        }
    }
}

?>

