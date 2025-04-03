<?php
include_once get_template_directory(). '/functions/genere-list-categorie.php';
// Définir le chemin vers le dossier "functions"
$functions_dir = get_template_directory() . '/functions/';

// Liste de fichiers a inclure
$functions_files = array(
  'customizer.php',
  'options.php'
);

// Inclure les fichiers spécifiques
foreach($functions_files as $file){
include_once $functions_dir . $file;
}