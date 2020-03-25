<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Covid-19 Visualization</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		@use postcss-custom-media;
		@use postcss-nested;

		body {
		  padding: 15px;
		  list-style-type: none;
		}

		.Legend-colorBox {
		    width: 15px;
		    height: 15px;
		    display: inline-block;
		    background-color: rgb(155, 187, 88);
		    list-style-type: none;
		}

		.Legend-label{
			font-size: 10px;
		}
	</style>
</head>
<body>
	<br>
	<div class="container">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		<br>
		<div class="row text-center">
			<div class="col-md-2" style="color: rgb(155, 187, 88);">
				<strong>Cases</strong>
				<br>
				<span id="cases"></span>
			</div>

			<div class="col-md-2" style="color:rgb(127, 96, 132)">
				<strong>Active</strong>
				<br>
				<span id="active"></span>
			</div>

			<div class="col-md-2" style="color:rgb(128, 100, 161)">
				<strong>Deaths</strong>
				<br>
				<span id="deaths"></span>
			</div>

			<div class="col-md-2" style="color:rgb(128, 100, 161)">
				<strong>Recovered</strong>
				<br>
				<span id="recovered"></span>
			</div>

			<div class="col-md-2">
				<strong>Todays Death</strong>
				<br>
				<span id="today_deaths"></span>
			</div>

			<div class="col-md-2" style="color:rgb(35, 191, 170);">
				<strong>Todays Cases</strong>
				<br>
				<span id="today_cases"></span>
			</div>
		</div>
	</div>	
	

<script src="asset/canvasjs.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
</body>
</html>

<script type="text/javascript">
	window.onload = function () {

		var dataPoints = [];
		var chart = new CanvasJS.Chart("chartContainer",{
			title:{
				text:"Philippine Covid Cases"
			},
			data: [{
				type: "column",
				dataPoints : dataPoints
			}]
		});


   
		$.getJSON("https://corona.lmao.ninja/countries/philippines", function(data) {  
			$.each(data, function(key, value){
				dataPoints.push({
					label: key, y: value
					//label: key.todayCases, y: parseInt(value.todayCases)
				});
			});

			chart.render();
		});
		
	}
</script>

<script type='application/javascript'>

    //api url
   var url = "https://corona.lmao.ninja/countries/Philippines";
   
   function connectToApi() {
    $.ajax({
			method: 'get',
			url: url,
			dataType: 'json',
			success: function(data){
				var active = data.active;
                var confirmed = data.cases;
                var deaths = data.deaths;
                var recovered = data.recovered;
                var today_deaths = data.todayDeaths;
                var today_cases = data.todayCases;
                $('#cases').html(confirmed);
                $('#active').html(active);
                $('#deaths').html(deaths);
                $('#recovered').html(recovered);
                $('#today_deaths').html(today_deaths);
                $('#today_cases').html(today_cases);
			}
		});
   }
   
   $(function(){
       setInterval(() => {
        connectToApi();
       }, 1000);
   });

</script>







