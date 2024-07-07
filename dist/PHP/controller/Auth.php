<?php 
namespace controller\Auth;


use Pet\Request\Request;
use Pet\Migration\Migration;
 class Auth{ 


     function Auth(Request $request){
      $Mig = new Migration();
      $Mig->back();
      exit;
        // dd($request);
     }


   }


 ?>