<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" height="16" width="16" id="logo" href="awdawdwada" />
	<meta charset="UTF-8">
	<title>Covid-19 Visualization</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
	<br>
	<div class="col-md-12">
		<div class="container">
			<form method="get">
				<div class="form-group">
				    <input type="text" class="form-control" name="search_input" id="search_input" placeholder="Enter Country Example 'philippines'">
				    <br>
				    <button id='search' class="btn btn-default">Search</button>
				</div>
			</form>

			<br>
			<br>
			<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
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
	</div>
	<br>
	<br>
	<br>
	<br>
	<div class="col-md-12">
		<div class="container">
			<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
		</div>
	</div>
	<footer>
		<p>By: RRDL <3</p>
	</footer>	
	

<?php
	$get_url = json_encode($_GET['search_input']);
?>

<script src="asset/canvasjs.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
	var url_get = "https://corona.lmao.ninja/countries/"+ <?= $get_url; ?>;

</script>

<script src="asset/main.js"></script>

<script type="text/javascript">
	var url =  "https://corona.lmao.ninja/countries/"+<?php echo $get_url; ?>;
	var url_name = <?= $get_url ?>;
</script>

<script src="asset/main2.js"></script>





</body>
</html>












