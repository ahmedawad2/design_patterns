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

$router->get('/dp', function () {


    $basicData = ['name' => 'ahmed', 'email' => 'ahmed@gmail.com'];
    $data = new \Classes\UserArrayRepo($basicData);
    $userFactory = new \Classes\UserFactory();

    $user = $userFactory->getBasicUser($data);
    print_r($user->getName());
    print_r($user->getEmail());


    $basicData['date'] = \Carbon\Carbon::now();
    $data = new \Classes\SwaziArrayRepo($basicData);

    print_r((new \Classes\UserFactory($user))->getSwaziUser($data));
});
