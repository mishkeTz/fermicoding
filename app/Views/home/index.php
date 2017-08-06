<div class="container">
	<h1>1.</h1>
	<p>Koristeći Bootstrap 3 napisati HTML/CSS za prikaz nekog elementa (npr. slike) 100x100px,
	proizvoljno dugačkog teksta desno od slike i još jednog proizvoljno dugačkog teksta desno od prethodnog.
	Na rezolucijama za mobilne uređaje desni pasus treba da padne ispod ostalih elemenata.</p>

	<div class="col-xs-6 col-sm-2"><img src="http://via.placeholder.com/100x100" alt="First"></div>
	<div class="col-xs-6 col-sm-5" style="background-color: lightgreen;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit fugiat quia voluptas omnis enim aliquam est minus, in vero libero rerum, provident nemo consectetur voluptate suscipit officiis fuga, magnam nobis.</div>
	<div class="col-xs-12 col-sm-5" style="background-color: skyblue;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolorem harum eveniet, rem molestias maxime delectus repudiandae quos et mollitia quasi sed omnis saepe ratione non totam modi, iure perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vitae eaque perspiciatis veritatis molestias ullam sequi totam quia provident, pariatur, error magni vel incidunt. Consectetur debitis dolor sequi repellat nihil?</div>
</div>

<hr>

<div class="container">
	<h1>2.</h1>
	<p>Pod pretpostavkom da imamo dva seta od po tri tekstualna input polja (dan, mesec, godina) - "od" i "do", napisati jQuery skriptu
	koja proverava validnost unetih datuma.</p>

	<div class="alert message" id="message">
		Mozda
	</div>
	
	<form id="date" action='<?php echo $_SERVER["PHP_SELF"]; ?>' autocomplete="off">
		<div class="col-xs-6 col-sm-6">
			<p>Od</p>
	
			<div class="form-group">
			    <label for="day_1">Day 1</label>
			    <input type="text" class="form-control" name="day_1" id="day_1" placeholder="01" enabled min="1" max="31">
			</div>

			<div class="form-group">
			    <label for="month_1">Month 1</label>
			    <input type="text" class="form-control" name="month_1" id="month_1" placeholder="01" min="1" max="12">
			</div>

			<div class="form-group">
			    <label for="year_1">Year 1</label>
			    <input type="text" class="form-control" name="year_1" id="year_1" placeholder="2017" min="1970" max="2030">
			</div>			
		</div>

		<div class="col-xs-6 col-sm-6">
			<p>Do</p>

			<div class="form-group">
			    <label for="day_2">Day 2</label>
			    <input type="text" class="form-control" name="day_2" id="day_2" placeholder="31" min="1" max="31">
			</div>

			<div class="form-group">
			    <label for="month_2">Month 2</label>
			    <input type="text" name="month_2" class="form-control" id="month_2" placeholder="12" min="1" max="12">
			</div>

			<div class="form-group">
			    <label for="year_2">Year 2</label>
			    <input type="text" class="form-control" name="year_2" id="year_2" placeholder="2017" min="1970" max="2030">  
			</div>					 
		</div>

		<div class="col-xs-12 col-sm-6">
			<button class="btn btn-success" style="margin-top: 30px;" type="submit" id="submit">Check</button>
		</div>
	</form>
</div>

<hr>

<div class="container">
	<h1>3.</h1>
	<p>a) Napisati PHP skriptu koja ispisuje trenutno vreme (sunčano, kišovito, oblačno...) za Novi Sad,
	korišćenjem openweather API-ja</p>
	<p>- b1) U browseru prikaz trenutnog vremena treba da se refresh-uje ajaxom na svakih 10 sec.</p>

	<p>City: <span id="city_name"></span></p>
	<p>Weather: <span id="city_weather"></span></p>
	<p>Weather description: <span id="city_weather_description"></span></p>
	<p>Temperature: <span id="city_temp"></span></p>
</div>


