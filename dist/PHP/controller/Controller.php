<?php

use Pet\Controller\Controller;
use Pet\View\View;
use Pet\Request\Request;
class ControllerStart extends Controller{

        function index(){
              View::open("welcom");
        }

}

