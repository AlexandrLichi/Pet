<?php
namespace Pet\Router;

use Pet\Router\Router;

class Prefix{

    public int $id;

    public function __construct(int $id) {
        $this->id = $id;
    }


    function name($name){
        Router::$Route[count(Router::$Route) - 1]['name'] = $name;
        return $this;
    }
    
    function group($name){
        Router::$Route[count(Router::$Route) - 1]['group'] = $name;
        return $this;
    }

}
?>