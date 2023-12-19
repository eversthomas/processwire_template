<?php $home = $pages->get('/'); /** @var HomePage $home */

require_once "style.php";

?><!DOCTYPE html>
<html lang="de">
	<head id="html-head">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $pages(1017)->website_title; ?></title>

        <meta name="description" content="<?php echo $pages(1017)->site_description; ?>">
        <meta name="author" content="<?php echo $pages(1017)->site_author; ?>">
        <meta name="keywords" content="<?php echo $pages(1017)->site_keywords; ?>">

        <meta property="og:title" content="<?php echo $pages(1017)->site_description; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://tevers.de">
        <meta property="og:description" content="<?php echo $pages(1017)->site_description; ?>">
        <meta property="og:image" content=" ">

        <link rel="icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php // echo $styles; ?>reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $styles; ?>style.css">
	</head>
	<body id="html-body">
