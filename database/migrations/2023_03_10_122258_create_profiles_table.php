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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string("visi")->nullable();   
            $table->string("misi")->nullable();   
            $table->string("slogan")->nullable();   
            $table->text("isi")->nullable();   
            $table->string("logo")->nullable();
            $table->text("alamat")->nullable(); 
            $table->string("senin_kamis")->nullable();
            $table->string("jumat")->nullable();
            $table->string("cs1")->nullable();
            $table->string("cs2")->nullable();
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
        Schema::dropIfExists('profile');
    }
};
