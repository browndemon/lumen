<?php
$app->group(['prefix' => 'api/v1', 'namespace' => 'app/Http/Controllers'], function($app){
    
    $app->post('car', 'CarController@createCar');
    $app->put('car/{id}', 'CarController@updateCar');
    $app->delete('car/{id}', 'CarController@deleteCar');
    $app->get('car', 'CarController@index');
});
