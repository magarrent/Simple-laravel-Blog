<?php
 
class Users {
 
    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function($table){
 
            $table->increments('id');
            $table->string('username', 60);
            $table->string('password', 100);
            $table->string('name', 60);
            $table->timestamps();
 
        });
 
    }
 
    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('users');
 
    }
 
}