<?php
namespace Pet\Middleware;

use Pet\Middleware\Middleware;
use Pet\Request\Request;
use Pet\Session\Session;

class  MiddlewareCSRF extends Middleware{

    protected $csrf  = true;
    private Session $Session;
    

    protected $method = ['POST', 'PUT', "DELETE"];

        public function __construct() {
            $this->Session = new Session();
        }

    function check(Request $Request){


        if(in_array($Request->method, $this->method)){

            if(!array_key_exists('token', $Request->attribute))
            
            $Request->redirect_code(400);

            if(password_verify($this->Session->get('token'), $Request->attribute['token']))

            $Request->redirect_code(400);

            }else{

                $this->Session->set(['token'=> $this->generateCSRF()['hash']]);

            }

    }

    private function generateCSRF():array
    {
          $uniqid = uniqid().uniqid();

          $date = date("Y-m-d");

          $time = date('H:i:s');
          
          return ['date' => $date, "time" => $time, 'hash' => password_hash($uniqid, PASSWORD_DEFAULT)];
    }
    
}