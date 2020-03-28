//var url = "https://corona.lmao.ninja/countries/"+ <?php echo json_encode($_GET['search_input']);?>;

   
   
$.ajax({
	method: 'get',
	url: url_get,
	dataType: 'json',
	success: function(data){
		var active = data.active.toLocaleString();
            var confirmed = data.cases.toLocaleString();
            var deaths = data.deaths.toLocaleString();
            var recovered = data.recovered.toLocaleString();
            var today_deaths = data.todayDeaths.toLocaleString();
            var today_cases = data.todayCases.toLocaleString();
            var logo = data.countryInfo.flag;
            $('#cases').html(confirmed);
            $('#active').html(active);
            $('#deaths').html(deaths);
            $('#recovered').html(recovered);
            $('#today_deaths').html(today_deaths);
            $('#today_cases').html(today_cases);
            $('#logo').attr('href', logo)
	}
});
   