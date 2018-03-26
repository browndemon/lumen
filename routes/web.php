<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//ADICIONANDO ROTA PARA CARS
$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('car',  ['uses' => 'CarController@showAllCars']);

  $router->get('car/{id}', ['uses' => 'CarController@showOneCar']);

  $router->post('car', ['uses' => 'CarController@createCar']);

  $router->delete('car/{id}', ['uses' => 'CarController@delete']);

  $router->put('car/{id}', ['uses' => 'CarController@update']);
});