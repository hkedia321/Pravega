<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<div style='overflow:hidden;height:440px;width:700px;'>
		<div id='gmap_canvas' style='height:440px;width:700px;'>
		</div>
		<div>
			<small>
				<a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions Get found</a></small>
			</div><div>
			<small><a href="https://www.amazon.com/Extra-Large-Folding-Kennel-Plastic/dp/B00M3NBJ8E/ref=sr_1_5?s=pet-supplies&ie=UTF8&qid=1470313482&sr=1-5keywords=pet+cage">Pet Wire Cage</a></small></div>
			<style>
				#gmap_canvas img{max-width:none!important;background:none!important}
			</style>
		</div>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
		<script type='text/javascript'>function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(12.9723913,79.15767519999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9723913,79.15767519999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Pravega Racing</strong><br>VIT University, Vellore, India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
		</script>
	</body>
	</html>