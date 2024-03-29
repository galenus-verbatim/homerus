<?php
/**
 * Edit this file to control your app of 
 * cts greek texts publication
 */

// load the master class of verbatim app
require_once(__DIR__ . '/vendor/autoload.php');

use Oeuvres\Kit\{Route,I18n};
use GalenusVerbatim\Verbatim\{Verbatim};


// connect to a database prepared with verbapie
// https://github.com/galenus-verbatim/verbapie
Verbatim::connect(__DIR__ . '/homerus.db');

Verbatim::name('Homerus, Verbatim demo');


// Register verbatim messages for the app
I18n::load(Verbatim::dir() .'/en.tsv');
// Register other messages
I18n::load(__DIR__ .'/homerus_en.tsv');
// register the template in which include content
Route::template(__DIR__ . '/template.php');



// welcome page
Route::get('/', __DIR__ . '/pages/ostium.html');
// https://www.digitalathenaeus.org/tools/KaibelText/cts_urn_retriever.php
// urn:cts:greekLit:tlg0008.tlg001.perseus-grc2:3.7
// Windows apache will send 403 with ':' in url
// No other way, mediawiki has search a lot for that
// https://www.mediawiki.org/wiki/Manual:Short_URL/Apache#Plan
Route::get(
    '/(urn[:/][^/]*)',
    Verbatim::dir() . '/doc.php',
    array(
        'cts' => '$1',
    )
);


// try if a php content is available in local
Route::get('/(.*)', __DIR__ . '/pages/$1.php'); 
// try if an html content is available in local
Route::get('/(.*)', __DIR__ . '/pages/$1.html');
// try if a tool page is available in Verbatim
Route::get('/(.*)',  Verbatim::dir() . '/$1.php'); 
// catch all
Route::route('/404', __DIR__ . '/pages/404.html');
// No Route has worked
echo "Bad routage, 404.";