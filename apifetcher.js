	function getweather(){
	var city = document.getElementById('search').value;
	var units = document.getElementById('units').value;
	fetch("http://api.weatherstack.com/current?access_key=1e34daf6fe05480239b3f5db51043326&query="
	+city+"&units="+units)
	.then( a => a.json())
	.then(response => {
	document.getElementById("image").src=response.current.weather_icons[0];
	document.getElementById("output").innerHTML="<h1>"
	+response.current.weather_descriptions[0]+"</h1>Temperature: "
	+response.current.temperature+"<br>Feels like "
	+response.current.feelslike+"<br>UV index: "
	+response.current.uv_index+"<br>Humidity: "
	+response.current.humidity+"<br>Cloud cover: "
	+response.current.cloudcover;
	});
	}