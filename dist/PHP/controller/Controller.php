<?php

use Pet\Controller\Controller;
use Pet\View\View;

class ControllerStart extends Controller{

        function index(){
              View::open("welcom");
        }

}

