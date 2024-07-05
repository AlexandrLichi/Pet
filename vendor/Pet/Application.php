<?php
namespace Pet;

use Pet\Middleware\MiddlewareCSRF;
use Pet\Router\Router;

class Application{

    public Router $Router;

    public function __construct() {
        $this->Router = new Router();
        $this->isTokenMiddleware();
    }

    // ставим проверку CSRF токен
    private function isTokenMiddleware(){
        $this->Router->setMiddleware(['group'=>'All', 'middleware'=>[new MiddlewareCSRF, 'check']]);
    } 

    function middleware($Midd = 0){
        $Midd = func_get_args();
        foreach($Midd as $middleware){
            $this->Router->setMiddleware($middleware);
        }
        return $this->Router;
    }

    

    static function started(){
        $GLOBALS['App'] = new Application();
        return $GLOBALS['App'];
    }
    
}
?>