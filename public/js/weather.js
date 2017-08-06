var xhttp = new XMLHttpRequest();

function init() {
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			handle(this.responseText);
		}
	}

	xhttp.open("GET", "http://fermicoding.dev/home/weather", true);
	xhttp.send();
}

init();

setInterval(init, 10000);

function handle(res) {

	var res = JSON.parse(res);
	
	var name = document.getElementById("city_name");
	var weather = document.getElementById("city_weather");
	var weatherDescription = document.getElementById("city_weather_description");
	var temp = document.getElementById("city_temp");

	name.innerHTML = res.name;
	weather.innerHTML = res.weather[0].main;
	weatherDescription.innerHTML = res.weather[0].description;
	temp.innerHTML = res.main.temp + " &#8451;";

}

