<?php

namespace Pet\Router;

use Pet\Middleware\Middleware;
 
use Pet\Request\Request;
use Pet\Router\Prefix as RouterPrefix;


class Router extends Middleware{

    protected Request $Request;
    static public $Route = [];

    public function __construct() {
        $this->Request = new Request();
        parent::__construct($this);
        
    }


    static public function get($path,  $collback ):RouterPrefix
    {
        Router::$Route[] = ["path" => $path, "method" => 'GET' , "callback" => $collback];
        return new RouterPrefix(count(Router::$Route) - 1);
    }


    static public function post($path,  $collback): RouterPrefix
    {
        Router::$Route[] = ["path" => $path, "method" => 'POST', "callback" => $collback];
        return new RouterPrefix(count(Router::$Route) - 1);
    }


    public function query(){
        foreach(Router::$Route as $Rout){
            
            if($Rout["method"] == $this->Request->method ){

                if($Rout["path"] == $this->Request->path || $this->Request->path ==  $this->mutable_path($Rout["path"])){
                    $this->Request->Router = $this;

                    parent::generateMiddleware($Rout, $this->Request);


                    if(gettype($Rout['callback']) == 'object') $Rout['callback']($this->Request);
                    if(gettype($Rout['callback']) == 'array') call_user_func($Rout['callback'], $this->Request);
                    exit;
                }

            }
          }

          http_response_code(404);
          $this->error_code(404);
          exit;
    }


    protected function mutable_path($mutable):bool|string{

        if(preg_match_all("|{([a-z]{1,})}|", $mutable, $matches)){

             $regular = $mutable;

            foreach($matches[0] as $name){

                $regular = str_replace($name,"([a-zA-Z0-9]{1,})", $regular);
            }
       
        if(preg_match("|$regular|", $this->Request->path, $result, PREG_UNMATCHED_AS_NULL)){
        
            foreach($matches[1] as $key=> $value){
                $this->Request->parametr[$value] = $result[$key + 1];  
            }
                   return trim($result[0]);
            }
       }
       
      return false;

    }


   public function error_code($code = null){
    
        http_response_code($code);
        $code && file_exists(__DIR__ . "/../../../" . ERROR_PAGE)?
        include_once(__DIR__ . "/../../../" . ERROR_PAGE):
        die("Not faund Router");
        exit;

    }


   public function fileRouter(array|string $files = []){

        if(gettype($files) == 'array'){
            foreach($files as $file) include_once($file);
        }else{
            include_once($files);
        }
        
        return $this;
    }


    static function middleware($param):Router{

        return Middleware::middleware($param);

    }
}
?>