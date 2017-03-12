<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Reid Repairs - Automotive Repair and Maintenance</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  		  <link rel="stylesheet" href="css/main.css">
  		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		  <script src="js/lettering.js"></script>
		  <script src="js/FitText.js"></script>
		  <script src="js/circletype.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="background">
			<div class="background small"></div>
			<div class="hr"></div>
			<h1 id="circle">REID REPAIRS LLC</h1>
			<div class="icon"></div>
			<p class="subtext" id="subtext"><span class="bigger">A</span>UTOMOTIVE <span class="bigger">R</span>EPAIR AND <span class="bigger">M</span>AINTENANCE</p>
			<div class="hr"></div>
			<div class="background small"></div>
		</div>
		<script>
			$('#circle').circleType({fitText:true, radius: 800});
			$('#subtext').fitText(5, { minFontSize: '12px', maxFontSize: '24px' });
		</script>


		 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home</a></li>
		        <li><a href="#">Services</a></li>
		        <li><a href="#">Appointments</a></li>
		        <li><a href="#">Feedback</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>


		<div class="content">
			<h2>Hours</h2>
			<p>Opening on 12/1/2015</p>
			<p id="countdown"></p>
			<p>Monday - Friday 8:00 to 5:00</p>
			<h2>Location</h2>
			<p>332 South York Road
			<br />
			Hatboro, PA 19040</p>
			<h2>Call</h2>
			<p>267-454-4682</p>
		<div>
	</body>
	<script>
		var end = new Date('12/1/2015 08:01 AM');
	    var _second = 1000;
	    var _minute = _second * 60;
	    var _hour = _minute * 60;
	    var _day = _hour * 24;
	    var timer;

	    function showRemaining() {
	        var now = new Date();
	        var distance = end - now;
	        if (distance < 0) {

	            clearInterval(timer);
	            document.getElementById('countdown').innerHTML = 'We\'re Open!';

	            return;
	        }
	        var days = Math.floor(distance / _day);
	        var hours = Math.floor((distance % _day) / _hour);
	        var minutes = Math.floor((distance % _hour) / _minute);
	        var seconds = Math.floor((distance % _minute) / _second);

	        document.getElementById('countdown').innerHTML = days + 'days ';
	        document.getElementById('countdown').innerHTML += hours + 'hrs ';
	        document.getElementById('countdown').innerHTML += minutes + 'mins ';
	        document.getElementById('countdown').innerHTML += seconds + 'secs';
	    }

	    timer = setInterval(showRemaining, 1000);
	</script>
</html>