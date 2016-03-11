<?php
/**
 * header.php
 * repeatable code, loads the header template in to each page
 *
 * @author dan moe
 */

require_once '_functions.php';
?><!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="Dan Moe">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?= $siteTitle; ?></title>

		<link rel="icon" href="assets/img/favicon.ico">
		<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>

	<body class="<?= $classes; ?>" id="top">

		<!--[if lt IE 10]>
			<p class="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<noscript>
			<p class="alert">Please <a href="http://www.enable-javascript.com/" target="_blank">enable javascript</a> to use our site</p>
		</noscript>