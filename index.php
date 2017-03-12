<!DOCTYPE html>

<html lang="en">
	<head>
		<meta name="google-site-verification" content="meTNIpi8kY7YotKUMxbV5LoC3pKKLF00hOXYvlgsyiA" />
		<title>Reid Repairs - Auto Repair - Hatboro, PA 19040</title>
		<meta name="description" content="Independently owned and operated mechanic shop with over 15 years of experience. Happy to answer questions you may have about your vehicle.">
		<meta name="keywords" content="Reid Repairs, Auto Repair, Hatboro, PA">
		<?php require('header.php'); ?>
	</head>

	<body id="home">
		<?php include_once("analyticstracking.php") ?>
		<?php require('branding.php') ?>
		<?php require('menu.php') ?>

		<div class="content static" id="content">

			<div id="scheduleCard" class="left">
				<div class="front">
					<h2>Hours</h2>
					<p><time>Monday - Friday 8:00 to 5:00</time><p>
					<p><time>Saturday 9:00 to 1:00</time><p>
					<p><button class="btn btn-primary" onclick="card('scheduleCard')">Click for Appointment</button></p>
					<h2>Location</h2>
					<a class="btn" href="/directions.php">
						<span>2 S York Road
						<br />
						Hatboro, PA 19040</span>
					</a>
					<h2>Call</h2>
					<p>267-454-4682</p>
				</div>
				<div class="back">
					<h3>Request Saturday</h3>

					<form action="https://docs.google.com/a/reidrepairs.com/forms/d/1qdhCt3fDuoNEPx3uhPz4wSh8TL3mUCzcgcm6BQWjRTg/formResponse" 
						method="POST" 
						id="ss-form" 
						target="_self" 
						onsubmit=""
						class="form-group">
					  	<div class="form-group">
					    	<label class="sr-only" for="inputName">Name</label>
					    	<input name="entry.1118412709" required type="text" class="form-control" id="inputName" placeholder="Name">
					  	</div>
					  	<div class="form-group">
					    	<label class="sr-only" for="inputEmail">Email address</label>
					    	<input name="entry.365860693" required type="email" class="form-control" id="inputEmail" placeholder="Email">
					  	</div>
					  	<div class="form-group">
					    	<label class="sr-only" for="inputPhone">Phone Number</label>
					    	<input name="entry.950055612" required type="tel" class="form-control" id="inputPhone" placeholder="Phone Number">
					  	</div>
					  	<div class="row">
					  	  <div class="col-xs-4">
						    <label style="margin-top: 5px;">Time </label>
						  </div>
						  <div class="col-xs-4">
						    <input name="entry.1757479884" type="number" class="form-control time" placeholder="hr" min="1" max="12">
						  </div>
						  <div class="col-xs-4">
						    <input name="entry.135624553" type="number" class="form-control time" placeholder="min" step="15" min="0" max="45">
						  </div>
						  
						</div>
						<!--
						<div class="row">
						   <div class="btn-group" data-toggle="buttons">
						    <label class="btn active">
						      <input type="radio" name="entry.1593620841" id="AM" autocomplete="off" value="AM"> AM
						    </label>
						   <label class="btn">
						      <input type="radio" name="entry.1593620841" id="PM" autocomplete="off" value="PM"> PM
						    </label>
						  </div>
						</div>
						-->
						<div class="form-group btn-row">
					    	<label class="sr-only" for="inputDescription">Description</label>
					    	<textarea name="entry.1021358522" required type="tel" class="form-control" id="inputDescription" placeholder="Reason for Visit"></textarea>
					  	</div>
					  	<div class="btn-row">
					  		<button class="btn btn-primary" type="submit">Send</button>
					  		<button class="btn btn-default" onclick="card('scheduleCard')">Cancel</button>
						</div>
					</form>

					<div id="confirmation">
						<p>Got it!</p>
						<p>We'll reach out and confirm.</p>
						<p>If you don't hear from us,</p>
						<p>please call.</p>
					</div>

					<script>
						$('#confirmation').hide();
					    $('#ss-form').submit(function(e) {
					    	console.log('hit')
					        e.preventDefault();
					        $.ajax({
					            url: "https://docs.google.com/a/reidrepairs.com/forms/d/1qdhCt3fDuoNEPx3uhPz4wSh8TL3mUCzcgcm6BQWjRTg/formResponse",
					            data: $(this).serialize(),
					            type: "POST",
					            dataType: "xml",
					            success: function(data) {
					                $('#confirmation').show();
					                $('#ss-form').hide();

					            },
					            error: function(xhr, status, error) {
					                $('#confirmation').show();
					                $('#ss-form').hide();
					            }
					        });
					    });
					</script>
				</div>
			</div>
			<div id="inspectionCard" class="right">
				
				<div class="uhaul-image">
					<img src="../img/uhaullogo.png" alt="Uhaul Rental Coming Soon" >
				</div>
				<div class="inspection-image">
					<img src="../img/InspectionKeystonePlate.png" alt="Official Inspection Station" >
				</div>
				<!--
				<div class="back">
					<button class="btn btn-small" onclick="card('inspectionCard')">X</button>
					<p>Coming Soon</p>
				</div>
				-->
			</div>
		</div>

		


<!--	
		<div class="content static front index-bottom">
			<h3>
				Services
			</h3>
			<ul  class="list-group" itemscope itemtype="http://schema.org/Service">
				<li class="list-group-item" itemprop="description">Vehicle Inspection</li>
				<li class="list-group-item" itemprop="description">Diagnostics</li>
				<li class="list-group-item" itemprop="description">Air Conditioning</li>
				<li class="list-group-item" itemprop="description">Shocks</li>
				<li class="list-group-item" itemprop="description">Transmission</li>
				<li class="list-group-item" itemprop="description">Muffler</li>
				<li class="list-group-item" itemprop="description">Brakes</li>
				<li class="list-group-item" itemprop="description">Tires</li>
			</ul>
		</div>
-->
	</body>

</html>