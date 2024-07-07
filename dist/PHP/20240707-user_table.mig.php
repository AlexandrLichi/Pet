<?php
use Pet\Migration\Migration;
use Pet\Migration\Schema;
use Pet\Migration\Table;
            
class user_table extends Migration{

    public function up(){
        
        //  Schema::$showQuery = true;
        Schema::create("user", function(Table $table){

            $table->id();
            $table->string('user');
            $table->string('password');
            $table->string('email');
            $table->string('roles')->null();
            $table->integer('company_id')->index()->foreign("company");
            $table->timestamp();
        });

    Schema::create("company", function (Table $table) {

            $table->id();
            $table->string('name');
            $table->string('api');
            $table->integer('messange');
            $table->string('roles')->null();
            $table->string('company')->null();
            $table->timestamp();
    });

    // print_r(Schema::$commandAfter);
   }

    function back(){
        Schema::drop("user");
        Schema::drop("company");
    }
}
?>