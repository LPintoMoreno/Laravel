<?php

use App\Http\Controllers\Controller_GET;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Proyecto', function () {
    // $data = [
    //     'data' => [
    //         'atributo' => 'valor'
    //     ]
    // ];

    // $dat2 = array(
    //     'data' = array(
    //         "atributo" => "asd"
    //     )
    // );
    // return $data;
    return view('Vista');
});

//Route::get('/Proyecto/{_id}', function ($_id) {
    //$control = new Controller_GET();
    //$retorno = $control->get($_id);
    //return $retorno;
//});
Route::post('/Proyecto', function () {
    return $retorno;
});
Route::get('/Proyecto/GreenFn', function () {
    return view('GreenFn');
});