<?php
namespace Pet\DataBase;

use Exception;
use mysqli;

class DB{

    public $Mysql;
    public $table;
    public $limit = null;
    public $NameBase =  DB_NAME;
    public $error = false;

    public $insert = false;


    public function __construct()
    {
        
    }
    
    

    function select(array $column = [], $where = 1)
    {
       

        $query = '`'. $this->escape('` , `', $column).'`';
        
        if(count($column) == 0)  $query = "*";
        
        $querySelect =  sprintf("SELECT $query FROM {$this->table} WHERE $where");
        $querySelect .= $this->limite();

        // print_r($querySelect);
        return $this->query($querySelect);

    }


    


    function insert(array $column = []):bool
    {

        if($this->checkInsert()) return false;

        if(!$this->connect()) return $this->error;

         $name = array_keys($column);
         $table = $this->table; 
        // 
         
         $name = '`' . $this->escape('` , `', $name) . '`';
         $value = "'" . $this->escape("' , '", $column) . "'";
         
         $query = sprintf("INSERT INTO `$table` ( $name ) VALUE ( $value ) ");
        
        return $this->Mysql->query($query);
    }

    function update(array $column = [], $where = ''){

        if ($this->checkInsert()) return false;
        if (!$this->connect()) return $this->error;

        $Set = '';
        
        foreach($column as $key => $value){
            if($key == 'id') $where .= "`id`='{$this->escapeStr($column['id'])}'";
            $Set .= " `$key`='{$this->escapeStr($value)}',";
        }

        $Set = substr($Set, 0, -1);
        $query = sprintf("UPDATE `{$this->table}` SET $Set WHERE $where");

        return $this->Mysql->query($query);

    }

    function delete(array $column = [], $where = "")
    {

        if ($this->checkInsert()) return false;
        if($this->checkInsert()) 
        if (!$this->connect()) return $this->error;

        if(array_key_exists('id', $column)){
        
         $where = " `id`='{$this->escapeStr($column['id'])}' ";
        }else{
            return false;
        }
        
        $query = sprintf("DELETE FROM `{$this->table}` WHERE ". $where);

        return $this->Mysql->query($query);
    }


    private function query($query)
    {

        if (!$this->error) {
            try{

                $sql = $this->Mysql->query($query);

            }catch(Exception $e){

                return $e->getMessage();;
            }

            $this->Mysql->close();

            return $sql->fetch_all(MYSQLI_ASSOC);
        } 
            return $this->error;
        
    }




    private function escape($separate , $column){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $str = '';

        foreach($column as $value)

            $str .= $this->Mysql->real_escape_string($value).$separate;

       
         return substr($str, 0, -intval(strlen($separate)));
    }



     function escapeStr($value):string
    {
    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        return $this->Mysql->real_escape_string($value);
        

         
    }


    public function connect():bool{

        $this->Mysql = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, $this->NameBase);

       if($this->Mysql->connect_error){

            $this->error = $this->Mysql->connect_error;
            return false;

       }
        return true;


    }

    private function limite():string{
        if($this->limit) return " LIMIT ".$this->limit;
        return "";
    }

    private function checkInsert():bool{
       return !$this->insert? $_SERVER['REQUEST_METHOD'] == "GET": false;
        
    }
}

?>