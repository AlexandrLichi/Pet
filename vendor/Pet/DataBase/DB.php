<?php
namespace Pet\DataBase;


use mysqli;

class DB{

    public $link;
    public $table;
    public $limit = null;


    public function __construct()
    {
        $this->connect();
    }
    
    

    function select(array $column = [], $where = 1)
    {
        // $this->escape($column);
        $query = '`'. $this->escape('` , `', $column).'`';
        
        if(count($column) == 0)  $query = "*";
        $table = $this->table;
        
        $querySelect =  sprintf("SELECT $query FROM $table WHERE $where");
        $querySelect .= $this->limite();
        
        $sql = mysqli_query($this->link, $querySelect );

        return mysqli_fetch_all($sql, MYSQLI_ASSOC);

    }


    function insert(array $column = []):bool
    {
        //  $this->escape($column);
         $name = array_keys($column);
         $table = $this->table; 
        // 
         
         $name = '`' . $this->escape('` , `', $name) . '`';
         $value = "'" . $this->escape("' , '", $column) . "'";
         
         $query = sprintf("INSERT INTO `$table` ( $name ) VALUE ( $value ) ");

         $sql = mysqli_query($this->link, $query);

        return $sql;
    }

    function update(array $column = [], $where = ''){
        // $this->escape($column);
        $Set = '';
        
        foreach($column as $key => $value){
            if($key == 'id') $where .= "`id`='{$this->escapeStr($column['id'])}'";
            $Set .= " `$key`='{$this->escapeStr($value)}',";
        }

        $Set = substr($Set, 0, -1);
        $query = sprintf("UPDATE `{$this->table}` SET $Set WHERE $where");

        $sql = mysqli_query($this->link, $query);
        return $sql;

    }

    function delete(array $column = [], $where = "")
    { 
        // $this->escape($column);
        if(array_key_exists('id', $column)){
        
         $where = " `id`='{$this->escapeStr($column['id'])}' ";
        }else{
            return false;
        }
        
        $query = sprintf("DELETE FROM `{$this->table}` WHERE ". $where);
   
        $sql = mysqli_query($this->link, $query);
        return $sql;
    }





    private function escape($separate , $column){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $str = '';

        foreach($column as $value){

            $str .= mysqli_real_escape_string($this->link, $value).$separate;

        }   
       
         return substr($str, 0, -intval(strlen($separate)));
    }

     function escapeStr($value)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        return mysqli_real_escape_string($this->link, $value);
        

         
    }


    public function connect():bool{

       $this->link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
       return !$this->link;

    }

    private function limite():string{
        if($this->limit) return "LIMIT ".$this->limit;
        return "";
    }
}

?>