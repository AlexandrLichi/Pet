<?php

use Pet\ErListen\ErListen;
use Pet\Middleware\Middleware;
use Pet\Router\Router;
use controller\AuthController;
use controller\AuthController\AuthController as AuthControllerAuthController;
use Pet\Controller\Controller;

class Test{
    function admin($R){
       print_r("Тербуеться авторизация ");
       exit;
    }
    function pik($R)
    {
        print_r("Pik midleware");
        // exit;
    }
}


Router::middleware([AuthControllerAuthController::class, 'index'])->group('Auth')->setRout(
    Router::get('/',[ControllerStart::class, 'index']),
);





// Router::get('/post/{id}/{name}', function ($R) {
//     echo "<h1> id: ".$R->parametr['id']." name: ".$R->parametr['name']."</h1>";
// });
// Router::get('/post', function ($R) {
//     echo "<h1> Post</h1>";
// });


// Router::$Error = ['404'=> [ErListen::class, 'page']];
// $router = new Router();
// $router->setMiddleware(
//     ['group'=> "Auth", 'middleware'=>[new Test(), 'admin']]
// );




// $router->query();


?>