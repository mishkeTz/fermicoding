<?php  

/** 
 * Postavljamo parametre za session cookie 
 * 60 minuta
 * za ceo sajt '/'
 * za poddomene .mishke2.dev
 *
 * HTTP only - true
 *
 * ----
 *
 * Postavljamo session name, umesto PHPSESSID postavljamo ime po nasem izboru
 *
 * ----
 *
 * Pokrecemo sesiju
 */
session_set_cookie_params(3600, '/', '.mishke-dev.dev', false, true);
session_name('mishke-dev');
session_start();


require_once '../vendor/autoload.php';

/** 
 * Postavljamo konstante koje pokazuju na root direktorijum naseg sajta i koristimo ih za ucitavanje stylesheet-ova, putanje linkova itd.
 */
define("ASSET_ROOT", "http://" . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', dirname(__DIR__))) . '/public');
define("BASE_ROOT", "http://" . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', dirname(__DIR__))));

// define("ASSET_ROOT", "http://www.mishke.co.nf/public");
// define("BASE_ROOT", "http://www.mishke.co.nf");


