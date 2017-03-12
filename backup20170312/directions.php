<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Reid Repairs - Directions and Map</title>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<?php require('header.php'); ?>

	</head>

	<body id="directions">
		<?php include_once("analyticstracking.php") ?>
		<?php require('branding.php') ?>

		<?php require('menu.php') ?>

		<div class="front">
			<h3>Address</h3>
			<div>
				<span>2 S York Road, Unit E
				<br />
				Hatboro, PA 19040</span>
			</div>

			<h3>Train</h3>
			<p>Reid Repairs is located in walking distance to SEPTA's Hatboro Regional Rail Station</p>

			<h3>Map</h3>
			<div class="content static" id="content">
				<div id="map"></div>
			<div>
		</div>
		
		<br />
	</body>
</html>