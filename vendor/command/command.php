<?php
namespace Command;
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

    static function make($comm, $name, $DIR){

        $path = $DIR."\\".env('FOLDER_PROJECT','dist');
        $pathInclude = $path."\\include.php";
        $result = [];

        if($comm == "controller:make"){
            $include = file($pathInclude);

            foreach($include as $row){
                $result[] = $row;
                if(str_contains($row, 'autoload.php')){
                    $result[] = "require_once('./PHP/controller/$name.php'); \n\r";
                }

            }

            file_put_contents($pathInclude,implode('', $result));
            $str = "<?php \n\r class $name { \n\r   // New controller \n\r\r\r\r\r   }\n\r\r ?>";
            file_put_contents($path."\\PHP\\controller\\$name.php", $str);
        }
    }
}
?>