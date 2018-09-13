
<!DOCTYPE HTML>
<html>
<head>
<title>Helpline Medical Care &amp; Tour</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('css/offline.css') }}" media="all">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
	var theDaysBox  = $("#numdays");
	var theHoursBox = $("#numhours");
	var theMinsBox  = $("#nummins");
	var theSecsBox  = $("#numsecs");
	
	var refreshId = setInterval(function() {
	  var currentSeconds = theSecsBox.text();
	  var currentMins    = theMinsBox.text();
	  var currentHours   = theHoursBox.text();
	  var currentDays    = theDaysBox.text();
	  
	  if(currentSeconds == 0 && currentMins == 0 && currentHours == 0 && currentDays == 0) {
	  	// if everything rusn out our timer is done!!
	  	// do some exciting code in here when your countdown timer finishes
	  	
	  } else if(currentSeconds == 0 && currentMins == 0 && currentHours == 0) {
	  	// if the seconds and minutes and hours run out we subtract 1 day
	  	theDaysBox.html(currentDays-1);
	  	theHoursBox.html("23");
	  	theMinsBox.html("59");
	  	theSecsBox.html("59");
	  } else if(currentSeconds == 0 && currentMins == 0) {
	  	// if the seconds and minutes run out we need to subtract 1 hour
	  	theHoursBox.html(currentHours-1);
	  	theMinsBox.html("59");
	  	theSecsBox.html("59");
	  } else if(currentSeconds == 0) {
	  	// if the seconds run out we need to subtract 1 minute
	  	theMinsBox.html(currentMins-1);
	  	theSecsBox.html("59");
	  } else {
      	theSecsBox.html(currentSeconds-1);
      }
   }, 1000);
});
</script>
</head>
<body>
<div class="wrap">
	<img src="{{ asset('images/offline/logo.png') }}" alt="Helpline Medical Care &amp; Tour">
	<h1>Helpline Medical Care &amp; Tour</h1>
<div class="main">
	<h2>our website is on progressive</h2>
	<div class="banner">
		<img src="{{ asset('images/offline/banner.png') }}" alt="" />
	</div>
	<div class="text">
		<h3>Will' be here soon with a new website,&nbsp;<span>Estimated time remaining...!</span></h3>
		<div class	="clock-ticker" class="clearfix">
			<div class="block">
				<span class="flip-top" id="numdays">06</span>
				<span class="flip-btm"></span>
				<footer class="label">Days</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="numhours">00</span>
				<span class="flip-btm"></span>
				<footer class="label">Hours</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="nummins">00</span>
				<span class="flip-btm"></span>
				<footer class="label">Mins</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="numsecs">00</span>
				<span class="flip-btm"></span>
				<footer class="label">Secs</footer>
			</div>
		</div>
	<form action="" class="searchbox">
	    <input class="search" type="text" id="email" name="email" placeholder=" Email Address">
	    <input class="submit" type="submit" value="Notify" name="submit" >
	    
	</form>
	</div>
	<div class="clear"></div>
	<div class="content">
	<div class="icons">
		<p class="left">follow us:</p>
	<ul class="left">
		<li><a href="#"><img src="{{ asset('images/offline/rss.png') }}" alt="" /></a></li>
		<li><a href="https://twitter.com/HMCandTour" target="_blank"><img src="images/twt.png" alt="" /></a></li>
		<li><a href="#"><img src="{{ asset('images/offline/plus.png') }}" alt="" /></a></li>
		<li><a href="#"><img src="{{ asset('images/offline/in.png') }}" alt="" /></a></li>
		<li><a href="https://www.facebook.com/HelplineMedicalCare/" target="_blank"><img src="{{ asset('images/offline/fb.png') }}" alt="" /></a></li>
	</ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<p> &copy; 2018 Helpline Medical Care &amp; Tour. All rights reserved | Developed by <a href="#">Alexeis</a> | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
</div>
</body>
</html>