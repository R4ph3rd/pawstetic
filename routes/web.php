<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router -> group (['prefix' => 'api'], function() use ($router){
    // $router->post('users', [ 'uses' =>  'UserController@createUser']);
    // $router->get('users', [ 'uses' =>  'UserController@getAllUsers']);
    // $router->get('users/{id}', [ 'uses' =>  'UserController@getUser']);

    // $router->post('pets', [ 'uses' =>  'PetController@createPet']);
    // $router->get('pets', [ 'uses' =>  'PetController@getAllPets']);
    // $router->get('pets/{id}', [ 'uses' =>  'PetController@getPet']);

    // $router->post('things', [ 'uses' =>  'ThingController@createThing']);
    // $router->get('things', [ 'uses' =>  'ThingController@getAllThings']);
    // $router->get('things/{name_or_id}', [ 'uses' =>  'ThingController@getThing']);

    $router -> group(['prefix' => 'users'], function() use ($router){
        $router->post('/', [ 'uses' =>  'UserController@createUser']);
        $router->get('/', [ 'uses' =>  'UserController@getAllUsers']);
        $router->get('/{id}', [ 'uses' =>  'UserController@getUser']);
    });

    $router -> group(['prefix' => 'pets'], function() use ($router){
        $router -> post('/', ['uses' => 'PetController@createPet']);
        $router -> get('/', ['uses' => 'PetController@getAllPets']);
        $router -> get('/{id}', ['uses' => 'PetController@getPet']);
    });

    $router -> group(['prefix' => 'things'], function() use ($router){
        $router -> post('/', ['uses' => 'ThingController@createThing']);
        $router -> get('/', ['uses' => 'ThingController@getAllThings']);
        $router -> get('/{id}[/pets]', ['uses' => 'ThingController@getPetsOwningThing']);
    });

    $router -> group(['prefix' => 'species'], function() use ($router){
        $router ->  post('/', ['uses' => 'SpecieController@createSpecie']);
        $router ->  get('/', ['uses' => 'SpecieController@getAllSpecies']);
        $router ->  get('/{id}', ['uses' => 'SpecieController@getSpecie']);
    });
});



// $url = route('/users/{id}');

// return redirect() -> route('/home/{id}');