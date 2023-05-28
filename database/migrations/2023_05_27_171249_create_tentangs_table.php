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
        Schema::create('tentang', function (Blueprint $table) {
            $table->id();
            $table->string("sejarah")->nullable();   
            $table->string("sejarah_foto")->nullable();   
            $table->string("filosofi")->nullable();   
            $table->string("filosofi_foto")->nullable();   
            $table->string("inovasi_judul")->nullable();   
            $table->string("inovasi_detail")->nullable();
            $table->string("inovasi_video")->nullable();      
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
        Schema::dropIfExists('tentang');
    }
};
