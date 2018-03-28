<?php
//$app->group(['prefix' => 'api', 'namespace' => 'app/Http/Controllers'], function($app){
$app->group(['prefix' => 'api'], function() use ($router){
    
    $router->post('car', 'CarController@createCar');
    $router->put('car/{id}', 'CarController@updateCar');
    $router->delete('car/{id}', 'CarController@deleteCar');
    $router->get('car', ['uses'=>'CarController@index']);
});
