<?php  

namespace App\Core;

use \PDO;
use \App\Config\Database;

/**
 * Klasa Controller sluzi za ucitavanje odredjenog modela i svakom modelu u konstruktor prosledjuje konekciju na bazu podataka
 * Svaki kontroler bi trebalo da nasledi klasu Controller 
 */
class Controller extends Database
{
	public function __construct() {}

	/**
	 * Pravi instancu odredjenog kontrolera
	 * @param  string $model Ime kontrolera
	 * @return object        Vraca instancu za odredjeni model
	 */
	protected function model($model)
	{
		$model = "\\App\\Models\\" . $model;
		
		return new $model(parent::getDB());
	}

	/**
	 * Ucitava view za odredjen kontroler/metod
	 * @param  string $view  putanja do view fajla
	 * @param  array  $data  podaci koje prosledjujemo iz metode kontrolera na view
	 * @param  string $title opcioni parametar za title tag u HTML-u
	 */
	protected function view($view, array $data = [], $title = 'Home')
	{
		require_once '../app/Views/' . $view . '.php';
	}

	/**
	 * Redirektuje na odredjenu stranicu prosledjuje se kontroler/metoda
	 * @param  [string] $url [kontroler/metoda]
	 */
	protected function redirect($url)
	{
		if ($url === 'error') {
			$_SESSION['error'] = true;
		}

		header("Location: " . BASE_ROOT . '/' . $url);
		die;
	}
}


