<?php


namespace Pet\Middleware;

use Pet\Request\Request;
use Pet\Router\Router;

class Middleware{

    static public array  $Middleware = [];
    public Router $Router;
    static $data = [];


    public function __construct(Router $Router) {
        $this->Router = $Router;
    }


    public function group($name):Router{
        // print_r(Middleware::$data);
        // exit;
        Middleware::$data['group'] = $name;
        return  $GLOBALS['App']->Router;
    }

    public function set($Routers){
        $Roters = func_get_args();
        foreach($Roters as $Rout){
            Router::$Route[$Rout->id]['group'] = Middleware::$data['group'];
        }

        $GLOBALS['App']->Router->setMiddleware(Middleware::$data);
        Middleware::$data = [];
    }

    static function middleware($Middleware):Router{
        Middleware::$data = ['middleware'=>$Middleware];
        return  $GLOBALS['App']->Router;
    }

    //[[name?="", group?="", middleware = [class , method]]]
    public function setMiddleware($array = [])
    {
        Middleware::$Middleware[] = $array;
        return $this->Router;
    }
  
    // проверяет аттрибуты в прослойки
    private function isAttr($connect){
        if(!array_key_exists('middleware', $connect) ) return false;
        if(count($connect['middleware']) == 0) return false;
        return true;
    }

    public function generateMiddleware($Rout, Request &$Request )
    {
    //    dd($Rout);
       
        foreach(Middleware::$Middleware as $key => $connect){
            if(!$this->isAttr($connect)) continue;
 
           $Group = $this->separate('group', $Rout, $connect);

            if ($Group == 'function'){
                return $connect['middleware'][0]($Request);
            }

            if($Group == 1){
                    return call_user_func($connect['middleware'], $Request);
            }

            if($Group > 1){
                foreach($connect['middleware'] as $middle){
                  return call_user_func($middle, $Request);
                }
            }

            $Name = $this->separate('name', $Rout, $connect);

            if ($Name == 'function'){
                return $connect['middleware'][0]($Request);
            }

            if ($Name == 1)
                return call_user_func($connect['middleware'], $Request);

            if ($Name > 1) {
                foreach ($connect['middleware'] as $middle) {
                 return call_user_func($middle, $Request);
                }
            }
        }
    }


    private function separate($name , $Rout, $connect){

        if(array_key_exists($name, $connect)){

            if($name == 'group' && strtolower($connect[$name]) == 'all') return $this->typeMiddlevare($connect);

            if (array_key_exists($name, $Rout)){

                if($Rout[$name] == $connect[$name]){
                    return $this->typeMiddlevare($connect);
                }
       
             }
        }

        return false;
    }


    private function typeMiddlevare($connect){
        
        if(gettype($connect['middleware']) == 'array'){
            if(gettype($connect['middleware'][0]) == 'string') return 1;
            if(gettype($connect['middleware'][0]) == 'array') return count($connect['middleware']);
        }

        if(gettype($connect['middleware'][0]) == 'object'){
            if(is_callable($connect['middleware'][0], false)) return 'function';
            if(is_callable($connect['middleware'], false)) return 1;
        }
    }
}

?>