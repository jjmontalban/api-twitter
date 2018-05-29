<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/twitter', function()
{
	//vamos a obtener el JSON que genera la API. El contenido de este JSON lo vamos a almacenar en la variable $html:
    $html = Twitter::getUserTimeline(['screen_name' => 'jjmontalban', 'count' => 20, 'format' => 'json']);

    // Una vez que hemos obtenido el JSON crudo que nos envia la API decodificamos el JSON con la función json_decode
    $json = json_decode($html);

    // Una vez que tenemos almacenada toda la información del JSON obtenido de la API vamos a extraer la información útil de el, para 
    // ello vamos a almacenar en variables con nombres orientativos la información del JSON
    dd($json);
});

