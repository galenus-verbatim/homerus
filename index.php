<?php
/**
 * Edit this file to control your app of 
 * cts greek texts publication
 */

// load the master class of verbatim app
require_once(__DIR__ . "/verbatim/" . "Verbatim.php");

use Oeuvres\Kit\{Route,I18n};

// connect to a database prepared with verbapie
// https://github.com/galenus-verbatim/verbapie
Verbatim::connect(__DIR__ . '/homerus.db');

Verbatim::name('Homerus, Verbatim demo');


// Register verbatim messages for the app
I18n::load(Route::app_dir() .'en.tsv');
// Register other messages
I18n::load(__DIR__ .'/homerus_en.tsv');

// register the template in which include content
Route::template(__DIR__ . '/template.php');

// welcome page
Route::get('/', __DIR__ . '/pages/ostium.html');

// a tlg content, array to pass params extracted from url path
// the default tool page in verbatim may help befor personalisation
Route::get('/(tlg.*)', Route::app_dir() . '/pages/doc.php', array('cts' => '$1'));


// try if a php content is available in local
Route::get('/(.*)', __DIR__ . '/pages/$1.php'); 
// try if an html content is available in local
Route::get('/(.*)', __DIR__ . '/pages/$1.html');
// try if a tool page is available in Verbatim
Route::get('/(.*)',  Route::app_dir() . 'pages/$1.php'); 
// catch all
Route::route('/404', __DIR__ . '/pages/404.html');
// No Route has worked
echo "Bad routage, 404.";