<?php

// use Request\Request;

// class Inertia{
//   static public $name = 'home';
//   static public $data = '';

//  static function render(string $name, object|null|array $Request = null){
//         Inertia::$name = $name;
     
//         $HEADER = getallheaders();
 
//         if(array_key_exists('Accept', $HEADER) && str_contains($HEADER['Accept'], "text/html")){
//             $Request?Inertia::$data = json_encode($Request): null;
            
//             include_once(dirname(__DIR__, 2)."\\".env('FOLDER_PROJECT', "dist")."\\view\\index.php");
//         }
//         // echo json_encode(getallheaders());

//         if(str_contains($HEADER['Accept'], "application/json")|| (array_key_exists('Content-type', $HEADER) && str_contains($HEADER['Content-type'], "application/json"))){
//             header('React: '.$name);
//             header("Content-Type: application/json");
//             echo json_encode($Request);
//         }
//             // print_r($Request);
        
//   } 
// }
?>