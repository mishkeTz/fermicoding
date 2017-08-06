<?php  

namespace App\Config;

use \PDO;

/**
 * Klasa Database sluzi za konektovanje na bazu, koristi se PDO i singleton pattern
 */
class Database 
{	
	protected static $instance = null;

	protected function __construct() {} 

	/**
	 * Konekcija na bazu podataka
	 * Singleton pattern
	 * Prosledjuje se svakom modelu u konstruktor 
	 * @return DB instance
	 */
	public static function getDB()
	{
		$config = self::getDbConfig();

		if (!self::$instance)
		{
			self::$instance = new PDO(
				"{$config->database}:host={$config->host};dbname={$config->DBname}", 
				$config->user, 
				$config->password
			);

			$timezone = self::$instance->query("SET GLOBAL time_zone = '+2:00'");

			self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
		}
		return self::$instance;
	}

	/**
	 * Uzima podatke za konekciju na bazu iz ~/config.json 
	 * @return [object] [Podaci o konekciji na bazu]
	 */
	protected static function getDbConfig()
	{
		return json_decode(file_get_contents("../config.json"));
	}
}

