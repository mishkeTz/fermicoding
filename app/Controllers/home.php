<?php  

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{
	public function index()
	{
		$this->view('_template/_header');
		$this->view('home/index');
		$this->view('_template/_footer');
	}

	public function weather() {
		$file = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Novi%20Sad&units=metric&APPID=b2e5bb58090841aec94157e206d1440c");

		echo $file;
	}
}


