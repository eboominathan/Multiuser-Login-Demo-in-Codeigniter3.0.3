<title>Next Demo </title>
<div class="alert alert-info">
<h1>Next Demo work is  Google Maps in Codeigniter 3.0.3 !</h1>

Note :you should have Net connection to see your location below ! 
</div>



<h3>You are here Now !</h3>
<input type="text" placeholder="Address"  name="address" class="address form-control" >
<br><br>
<div class="caler-maps">
<div id="calermap"></div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="<?php echo base_url();?>assets/js/locationpicker.jquery.min.js"></script>

<script>


window.onload = function ()
{
	getLocation();
}


function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	var a =position.coords.latitude;
	var b=position.coords.longitude;

	$('#calermap').locationpicker({
		location: {latitude: a, longitude: b},
	
		inputBinding: {             
			locationNameInput: $('.address')
		}
		
		
	});


}
</script>


<style>
#calermap
{ 
	height: 431px;
	width: 100%;

}
</style>