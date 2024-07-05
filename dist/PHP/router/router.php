<?php

use Pet\ErListen\ErListen;
use Pet\Router\Router;
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


// Router::middleware([new Test, 'pik'])->group('Pic')->set(

//    Router::get('/pik', function ($R) { echo 'Pik';}),
//     Router::get('/sik', function ($R) {  echo 'Sik';}),

// );


Router::get('/', function ($R) {
    echo 'start';
//  dd(["hi"=>"hi"]);
})->group('Auth');


// Router::get('/admin', function ($R) {
//     echo "<h1>Admin</h1>";
// });



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