<?php


function env($constans = null, $default = null){
  
   $env = file(dirname(__DIR__, 2).'\.env');

    foreach($env as $str){
        if (str_contains(trim($str), '#') && strpos(trim($str),"#") == 0) continue;
        if(str_contains($str, '=')){

            $param = explode('=', $str);

            if(trim($param[0]) == trim($constans)){
                return trim(str_replace([';','"',"'",],'', $param[1] ));
            }
        }

    }

    return $default;
}

?>