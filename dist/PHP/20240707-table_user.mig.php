<?php
use Pet\Migration\Migration;
use Pet\Migration\Schema;
            
class table_user extends Migration{

    public function up(){

    Schema::create("new", function($table){

    $table->id();
    $table->timestamp();

    });

   }

    function back(){
        Schema::drop("new");
    }
}
?>