<?php

use Pet\Application;

require_once(__DIR__.'\\..\\vendor\\autoload.php');
Application::started()->middleware(
['group' =>'Auth', "middleware"=> [] ],
// ['group' => 'User', "middleware" => [AuthController::class, 'user']],
)
->fileRouter(__DIR__.'/PHP/router/router.php')
->query();



?>