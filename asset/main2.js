window.onload = function () {

	//var url = "https://corona.lmao.ninja/countries/"+ <?php echo json_encode($_GET['search_input']);?>;

		

	$("#search").click(function(){
		var str = $('#search_input').val();
		   var url = "https://corona.lmao.ninja/countries/"+str;
		    
	});


	var dataPoints = [];
	var text = url_name+ " "+ "Covid-19 Cases";
	var capitalize = text.toUpperCase();
	var chart = new CanvasJS.Chart("chartContainer",{
		title:{
			text:capitalize
		},
		data: [{
			type: "column",
			dataPoints : dataPoints
		}]
	});


   
	$.getJSON(url, function(data) {  
		var kuyu = Object.getOwnPropertyNames(data);
			

		dataPoints.push({
			label: kuyu[2], y: data.cases
		});

		dataPoints.push({
			label: kuyu[7], y: data.active
		});

		dataPoints.push({
			label: kuyu[4], y: data.deaths
		});

		dataPoints.push({
			label: kuyu[6], y: data.recovered
		});

		dataPoints.push({
			label: kuyu[5], y: data.todaysDeaths
		});

		dataPoints.push({
			label: kuyu[3], y: data.todaysCases
		});

		

		chart.render();
	});
		
		
}