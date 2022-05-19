<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anonces', function (Blueprint $table){

            $table->integer('annonce_id')->primary('annonce_id')->autoIncrement('annonce_id');
            $table->foreignId('user_id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('user_id');
            $table->string('title');
            $table->text('body');
            $table->float('prix');
            $table->string('file');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anonces');
    }
};
