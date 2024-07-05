<?php
namespace Pet\Session;

class Session{
    private $session;
    private $session_folder;
    public string $id;


    public function __construct() {

       $this->session = SESSION;
       $this->session_folder = SESSION_FOLDER;
       session_start([
        'name'=>"PETSESSION"
       ]);

    }

    function creade(){

    }

    public function set($data = []){
        foreach($data as $key => $value) $_SESSION[$key] = $value;
        if($this->session == 'file'){
            $this->setFile($data);
        }

        if ($this->session == 'base'){

        }
    }

    public function get($key):string{
        if(!array_key_exists($key, $_SESSION)) return '';
        return $_SESSION[$key];
    }

    private function setFile($data = []){
        $DIR = __DIR__ . "\\..\\..\\..\\" . $this->session_folder;
        if(!is_dir($DIR))mkdir($DIR);
        if(!file_exists($DIR ."\\session.json")) file_put_contents($DIR . "\\session.json",'{ "data":[] } ');
        $file = json_decode(file_get_contents($DIR . "\\session.json"));
        $file->data[] = $data;
        file_put_contents($DIR . "\\session.json", json_encode($file));
    }

    private function getFile()
    {

        
    
    }

}
?>