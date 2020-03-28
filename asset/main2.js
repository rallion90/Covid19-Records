window.onload = function () {

	//var url_all = "https://corona.lmao.ninja/countries/"+ <?php echo json_encode($_GET['search_input']);?>;

		

	$("#search").click(function(){
		var str = $('#search_input').val();
		   var url = "https://corona.lmao.ninja/countries/"+str;
		    
	});


	var dataPoints = [];
	var dataPoints2 = [];
	var url_all = "https://corona.lmao.ninja/countries";

	var text = url_name+ " "+ "Covid-19 Cases";
	var capitalize = text.toUpperCase();

	//first chart
	var chart1 = new CanvasJS.Chart("chartContainer1",{
		animationEnabled: true,
		title:{
			text:capitalize
		},
		data: [{
			type: "column",
			dataPoints : dataPoints
		}]
	});

	//2nd charts

	var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	
	title:{
		text:"Country with the Highest Rate of Covid 19"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)"
		//title: "Number of Companies"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: dataPoints2
	}]

	});


   	//first graphg
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

		chart1.render();
	});

	//2nd graph
	$.getJSON(url_all, function(data) {  

		var laman = data.sort(function(b, a){return b - a});

		var result = laman.slice(0,10);
		
		$.each(result, function(item, value){
			
			dataPoints2.push({
				y: value.cases, label: value.country
			});

			
		});

		chart2.render();
	});

	
		
		
}