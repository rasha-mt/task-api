<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('pkey');
            $table->string('name')->nullable();
            $table->timestamps('due')->nullable();
            $table->longText('notes');
            $table->integer('status');

            $table->integer('user_id')->unsigned();;
            $table->string('list')->nullable();
            $table->integer('inquiry_id')->unsigned();;

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('list')->references('id')->on('Lists');
            $table->foreign('inquiry_id')->references('id')->on('inquiry');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
