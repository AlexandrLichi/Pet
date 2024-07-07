<?php
namespace Pet\Migration;
use Pet\Migration\Table;
use mysqli;


class Schema{

    static $DB = DB_NAME;
 

    static function create($name , callable $callable)
    {

        $table = new Table($name , Schema::$DB);

        $callable($table);
        Schema::query($table->build());

    }

    static function drop($table)
    {
        $DB = Schema::$DB;
        Schema::query(" DROP TABLE `{$DB}`.`{$table}`;");
    }

    static function clear($table)
    {
   
        $DB = Schema::$DB;
        Schema::query("DELETE FROM `{$DB}`.`{$table}`;");
    }

    static function atler($tableName ,$nameAfter, callable $callable)
    {

        $DB = Schema::$DB;

        $table = new Table($tableName, Schema::$DB);

        $callable($table);

        $attr = implode(' ', $table->attribute);

        Schema::query("ALTER TABLE `{$DB}`.`{$tableName}` ADD {$attr} AFTER `$nameAfter`;");
    }

    static function deleteColumn( $table, $name)
    {
        $DB = Schema::$DB;
        Schema::query("ALTER TABLE `{$DB}`.`{$table}` DROP `$name`;");

    }

    static private function query($query){

        $mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, Schema::$DB);


        if($mysqli->connect_error){

            echo "Error: ". $mysqli->connect_error;
        }else{

            $sql = $mysqli->query($query);
            $mysqli->close();

        }
    }


}
?>