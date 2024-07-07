<?php
 namespace Pet\Migration;
use Pet\Migration\Schema;
class Migration {

    static $serilic;
    static $BD;

    public function __construct() {
     
    }

    function up(){

        Schema::create("sort", function($table){

            $table->id();
            $table->timestamp();
            $table->string("user")->null();

        });
    }

    function back(){
        Schema::drop("sort");
    }

}
?>