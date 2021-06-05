<?php namespace Vasya\Lab18\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasyaLab18Table extends Migration
{
    public function up()
    {
        Schema::create('vasya_lab18_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('phone', 191)->nullable();
            $table->string('ip', 20)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasya_lab18_table');
    }
}
