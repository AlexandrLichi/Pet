<?php
namespace Pet;

use Pet\Middleware\MiddlewareCSRF;
use Pet\Router\Router;

class Application{

    public Router $Router;
    private $csrf;

    public function __construct() {
        $this->Router = new Router();
        $this->csrf = [MiddlewareCSRF::class,'check'];
    }



    function middleware($Midd = 0){
        
        $Midd = func_get_args();

        // default
        $Midd[] = $this->csrf;

        foreach($Midd as $middleware){
           
             Router::middleware($middleware)->group('All');
          
        }

        return $this->Router;
    }

    

    static function started(){
        $GLOBALS['App'] = new Application();
        return $GLOBALS['App'];
    }
    
}
?>