<?php

use Pet\Controller\Controller;
use Pet\DataBase\DB;
use Pet\Model\Model;

class ControllerStart extends Controller{
       static function index(){
        
          // dd($_SERVER);
         $DB = new Model();

          $res =  $DB->findUpOrIn(['text'=> "WhatsApp 154r5656gdf", "title"=>"Пустошь"])->search("title");

        }

        
      
}

