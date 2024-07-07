<?php

use controller\Auth\Auth;
use Pet\Router\Router;


Router::get('/',[ControllerStart::class, 'index']);
Router::middleware([Auth::class, 'auth'])->group("Auth")->setRout(
    Router::get('/admin', [ControllerStart::class, 'index']),
)


?>