<?php
namespace Pet\Migration;

class Table{

    private $primary = "";
    public $attribute = [];
    private $ENGINE = "ENGINE = InnoDB";
    private $foreign = [];
    private $charset = 'CHARSET=utf8 COLLATE utf8_general_ci';
    private $tableComment = "COMMENT = 'new table create'";

    private $table = '';
    private $DB;


   
    public function __construct($name_table, $DB){

        $this->table = $name_table;
        $this->DB = $DB;

    }


    /**
     * Аттрибуты  
     * */
    public function id($name = 'id'){

        $this->attribute[] = " `$name` INT(60) NOT NULL AUTO_INCREMENT, ";
        $this->primary = " PRIMARY KEY (`$name`)";
        return $this;

    }

    public function string($name , $length = 255){
        $this->attribute[] = " `$name` VARCHAR($length) NOT NULL ,";
        return $this;
    }

    public function integer($name, $length = 60){

        $this->attribute[] = " `$name` INT($length) NULL ,"; 
        return $this;
    }

    public function boolean($name){

        $this->attribute[] = " `$name` BOOLEAN NULL ,";
        return $this;

    }

    public function timestamp($name = "date-time"){

        $this->attribute[] = " `$name` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ,";
        return $this;
    }

    public function tableComment($comment)
    {
        $this->tableComment = "COMMENT = '$comment'";
    }


    public function storage($typebase = "InnoDB"){

        $this->ENGINE = " ENGINE = $typebase ";
    }

    /** 
     * Параметры атрибутов
     */ 

    public function null(){

       $attr =  $this->attribute[count($this->attribute) - 1];
       $attr  = str_replace( "NOT", "", $attr);

        $this->attribute[count( $this->attribute) - 1]
        = str_replace("NULL", "NULL DEFAULT NULL", $attr,);
        return $this;
    }



    public function foreign($table, $refer){

        $attr =  $this->attribute[count( $this->attribute) - 1];

        preg_match("/`([a-zA-Z]{1,})`/",$attr, $matches);

        $this->foreign[] =
        " FOREIGN KEY ({$matches[0]}) REFERENCES $table(`$refer`), ";

        return $this;
    }

    /*
    * @build string request Mysqli
    */  

    function build():string{

       $attr = implode(' ', $this->attribute);

       if(count($this->foreign)) $attr .= implode(" ",$this->foreign);
      
        return " CREATE TABLE  `{$this->DB}`.`$this->table` ($attr {$this->primary}) {$this->ENGINE} {$this->charset} {$this->tableComment};";
    }

   

}
?>