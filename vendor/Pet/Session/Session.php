<?php
namespace Pet\Session;

class Session{

    private $session;
    public string $id;
    private string $dir ;
    public function __construct() {

       $this->session = SESSION;
       $this->dir = __DIR__ . "\\..\\..\\..\\" . SESSION_FOLDER;
       
       session_start([
          'name'=>"PETSESSION"
        ]);

    }

    // function creade(){

    // }

    public function set($data = []){

        foreach($data as $key => $value) $_SESSION[$key] = $value;

        $data['id'] = session_id();

        if($this->session == 'file'){
            
            if(!$this->replace($data['id'], $data)){

              $new =  $this->getFile();
              $new->data[] = $data;
              $this->setFile($new);


            }
        }

        if ($this->session == 'base'){

        }
    }

    public function get($key):string{

        if(!array_key_exists($key, $_SESSION)) return '';

        return $_SESSION[$key];
    }

    private function getFile(){

        if(!is_dir($this->dir))mkdir($this->dir);
        if(!file_exists($this->dir ."\\session.json")) file_put_contents($this->dir . "\\session.json",'{ "data":[] } ');
        return json_decode(file_get_contents($this->dir . "\\session.json"));

    }


    private function setFile($file){
        file_put_contents($this->dir . "\\session.json", json_encode($file));
     }

    

    private  function isId($id, $callbak = null):bool{

        $file = $this->getFile();

        foreach($file->data as $i => $session){

            if(property_exists($session, 'id') && $session->id == $id){

                if(!$callbak) $callbak($file, $i);
                return true;
            }
        }

        return false;
    }



    private  function replace($id, $data =[]):bool{

       return  $this->isId($id, function($datafile , $i, $data){

            foreach($data as $attr => $value){

                $datafile->data[$i][$attr] = $value;
                $this->setFile($datafile);
            }

        });

    }
}
?>