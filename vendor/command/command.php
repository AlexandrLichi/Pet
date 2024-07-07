<?php
namespace Command;

use Pet\FrontClasses\FrontClasses;
class Command{


   public static function serveLocal($DIR){
        echo "\033[02;32m  \n\r \n\r   site: " .  'http://localhost:8000' . " \033[0m \n\r \n\r";
        exec("php -S localhost:8000 dist/bootstrap.php");
   }    

    public static function serve($DIR){

        $pathXampp = env('XAMPP', 'C:\xampp');

        $httpd = file($pathXampp."\\apache\\conf\\httpd.conf", FILE_SKIP_EMPTY_LINES);
        $DIR .= "\\".env('FOLDER_PROJECT', 'dist');


        $control = false;
        $old_dir = '';
        $newConfig = '';

        foreach($httpd as $line => $text){

            if(!str_contains($text, '#')){

                if(str_contains($text, 'DocumentRoot')){

                    $old_dir = str_replace(['DocumentRoot ', '"'],"", $text);
                    $httpd[$line] = 'DocumentRoot "'.$DIR.'"'."\n\r";
                    echo $httpd[$line];
                    $control = true;

                }

                if($control){
                    if (str_contains($text, '<Directory "'.$old_dir.'">')) {
                        $httpd[$line] = '<Directory "'. $DIR .'">'."\n\r";
                        echo $text;
                        $control = false;
                    }
                }
            }

           $newConfig .= $httpd[$line];
        }

        // echo $newConfig;
    
        file_put_contents($pathXampp . "\\apache\\conf\\httpd.conf", $newConfig);

        exec($pathXampp."\\xampp_start.exe");

        echo "\033[02;32m  \n\r \n\r \n\r \n\r  site: " .  'http://localhost' . " \033[0m \n\r \n\r \n\r \n\r";
        echo "\033[00;32m".'puch Enter stop server apache'. " \033[0m \n\r";

        exec("pause");

        echo "\033[01;31m stops working...  \033[0m \n\r";

        exec($pathXampp . "\\xampp_stop.exe");
        echo "\033[01;31m Server stop apache \033[0m  ";
    }

    static function make($name, $DIR){

        $folder_project = env('FOLDER_PROJECT','dist');

        // $pathInclude = $path."\\include.php";
        // $result = [];


        // if($comm == "controller:make"){
        //     $include = file($pathInclude);
        //     file_put_contents($pathInclude,implode('', $result));
        /* $str = "<?php \n\r class $name { \n\r   // New controller \n\r\r\r\r\r   }\n\r\r ?>";
             file_put_contents($path."\\PHP\\controller\\$name.php", $str);
         } */

        if ($name[1] == "migrate:make") {
            if(count($name) < 2) die("set migration [name]");

             $Text = file_get_contents(__DIR__.'\\txt\\sample.mig.txt');
             $Text = str_replace('{name}', $name[2], $Text);
             $date = date('Ymd');

             file_put_contents("$DIR\\$folder_project\\PHP\\{$date}-{$name[2]}.mig.php", $Text);

            
        }
    }




    static function migration($comm, $DIR, $method){

       

        $folder_project = env('FOLDER_PROJECT');
        $path = $DIR."\\".$folder_project."\\PHP\\";
        $files = include_dir($path, ".mig.php");

        
        foreach($files as $file){

            preg_match("/[_A-Za-z]{1,}/", $file, $mcth);
            $front = new FrontClasses(); 
            $front->classStarted([$mcth[0], $method]);

            if($method == 'up'){

              $tables =  $front->classStarted([$mcth[0], 'setAfter']);

              if(in_array('-m', $comm)){

                $sampleModel = file_get_contents(__DIR__."\\txt\\sample.model.txt");

                foreach($tables as $name => $join){

                    $Name = ucfirst($name);

                    $Model = str_replace(['{name}'], $Name, $sampleModel);
                    $Model = str_replace(['{table}'],'"'.$name.'"', $Model);
                   
                   
                    $Model = str_replace(['{join}'],"['".implode("','",$join)."']", $Model);
                    
                    file_put_contents($path."\\model\\{$Name}.php", $Model);
                }
              }
            }
        }
    }


    static function info()
    {
       
        $file = file(__DIR__."\\txt\\info.txt");

        foreach($file as $row){

            if(trim($row) == '') continue;
            $text = explode("--", $row);
            echo "\033[02;32m {$text[0]}\033[0m {$text[1]}";

        }

    }
}
?>