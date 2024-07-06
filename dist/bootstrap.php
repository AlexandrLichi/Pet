<?php

use Pet\Application;

require_once(__DIR__.'\\..\\vendor\\autoload.php');
require_once(__DIR__.'\\PHP\\controller\\Controller.php');
require_once(__DIR__ . '\\PHP\\controller\\AuthController.php');

Application::started()->middleware()
->fileRouter(__DIR__.'/PHP/router/router.php')
->query();



?>