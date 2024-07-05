<?php
namespace Pet\Request;

use Pet\Router\Router;

class Request{

    public array $attribute = [];
    public array $header = [];
    public string $method = '';
    public string $path = '';
    public array $parametr = [];
    public Router $Router;
    public $Redirect = [];
    public $error_code;

    public function __construct() {
       $this->method = $_SERVER['REQUEST_METHOD'];
       $this->attribute = $this->input();
       $this->path = $this->getPath();
    }

    public function input(string|null $name = null){
        if(!$name) return $_REQUEST;
        return array_key_exists($name, $_REQUEST) ? $_REQUEST[$name] : null;
    }

    public function getPath(){
        return str_contains($_SERVER['REQUEST_URI'], '?')? explode('?', $_SERVER['REQUEST_URI'])[0]:
        $_SERVER['REQUEST_URI'];
    }

    

    static function create():Request{
        return new Request();
    }
    

    // Редирект 
    public function redirect($path){
        
        if(!in_array($path, $this->Redirect)){

            $this->Redirect = [$path];
            $this->path = $path;
            $this->Router->query();

        }
    }

    
    // Redirect на страницу ошибки 
    public function redirect_code($code = null){
        $this->Router->error_code($code);
    }


}
?>