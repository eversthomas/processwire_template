<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

// template urls
$templatesUrl = $config->urls->templates;
$styles = $templatesUrl . "styles/";
$scripts = $templatesUrl . "scripts/";
$img = $templatesUrl . "img/";