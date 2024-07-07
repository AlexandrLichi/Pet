<?php 
namespace controller\Auth;

use Pet\Model\Model;

use Pet\Request\Request;
use Pet\Migration\Migration;
 class Auth{ 


     function Auth(Request $request){
      $model = new Model();

     $res = $model->findJoin(['id'=>1],['company'=>"company_id"]);
     print_r($res);
      exit;
        // dd($request);
     }


   }


 ?>