<?php

require_once "scripts/scssphp/scss.inc.php"; // Pfad zum scssphp-Verzeichnis
use ScssPhp\ScssPhp\Compiler; // soll den Compiler nutzen
use ScssPhp\ScssPhp\OutputStyle; // soll ermöglichen, den Output Style zu nutzen

$scss = new Compiler(); // startet neuen Compiler
$scss->setImportPaths("styles/"); // Pfad zum Verzeichnis deiner SCSS-Dateien
$scss->setOutputStyle(OutputStyle::COMPRESSED); // Setzt den Ausgabestil auf komprimiert

// hole die Haupt scss datei und kompiliere sie
$css = $scss->compile('@import "main.scss";');

// schreibe eine neue css datei
file_put_contents("styles/style.css", $css);
