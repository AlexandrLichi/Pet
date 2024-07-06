<?php

use Pet\Application;

require_once(__DIR__.'\\..\\vendor\\autoload.php');

spl_autoload_register(function (string $class){
    
       $path = __DIR__."\\PHP\\";

       search_file($path, $class);
});

function search_file($path , $className =''){

    $classN  = array_reverse(explode("\\", $className))[0];
  
    foreach (scandir($path) as $dir) {

        if ($dir == ".." || $dir == '.') continue;
        $dir = $path . "\\" . $dir;

        if(is_dir($dir)){

            search_file($dir, $className);

        }else{

           if(is_readable($dir)){

             $file = file($dir);

            foreach($file as $row)
            if(str_contains($row, "class ". $classN))
                require_once($dir);
            
            
            
           }
        }
        
    }

}

// require_once(__DIR__.'\\PHP\\controller\\Controller.php');
// require_once(__DIR__ . '\\PHP\\controller\\AuthController.php');

Application::started()->middleware()
->fileRouter(__DIR__.'/PHP/router/router.php')
->query();



?>