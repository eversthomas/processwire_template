<?php

require_once "scripts/scssphp/scss.inc.php"; // Pfad zum scssphp-Verzeichnis
use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$scss->setImportPaths("styles/"); // Pfad zum Verzeichnis deiner SCSS-Dateien

// hole die Haupt scss datei und kompiliere sie
$css = $scss->compile('@import "main.scss";');

// schreibe eine neue css datei (unminimiert)
file_put_contents("styles/style.css", $css);