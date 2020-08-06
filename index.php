 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather app</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
	<script src="apifetcher.js" async></script>
	<head>
</head>
	<style>
	#container{
		margin-top: 20px;
		padding: 10px;
		background-color: #3f51b5;
		text-align: center;
		}
	#container2{
		margin-top: 20px;
		padding: 10px;
		text-align:center;

		}
	.color{
		background-color: #3f51b5;
	}
	.text{
		color: white;
	}
	.mt{
		margin-top: 20px;
		padding: 10px;
	}
	</style>
  </head>
	<body>
	
	<!-- As a heading -->
	<nav class="navbar color navbar-expand-sm">
	  <span class="navbar-brand mb-0 h1 text">Weather App</span>
	</nav>
	<div id="container" class="container">
	<div class="row">
	<div class="col">
	<input placeholder='City/Zip' id='search'>
	<select id='units'>
	<option value='f'>Fahrenheit</option>
	<option value='m'>Celcius</option>
	</select>
	<button onclick='getweather()'>Get weather!</button>
	</div>
	</div>
	</div>
	<div id="container2" class="container">
	<div class="row mt">
	<div class="col">
	<img id='image' style="border-radius:5px;">
	<div id='output'></div>
	</div>
	</div>
	</div>

	</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</html>
