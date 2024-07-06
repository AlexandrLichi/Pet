<?php

use Pet\Controller\Controller;
use Pet\DataBase\DB;
use Pet\Model\Model;

class ControllerStart extends Controller{
       static function index(){
        //  header('Content-type: text/code; charset=UTF-8;');
        //  echo '<br>';
         $DB = new Model();
         $DB->table = 'post';

          $res =  $DB->findUpOrIn([ 'text'=>"Новая запись id 1",
                                     "title"=>"Пустошь",
                                      "date"=>date('Y-m-d')
                                   ])->search(["text" => "Hello"]);

          print_r($res);
        }

        
      
}

