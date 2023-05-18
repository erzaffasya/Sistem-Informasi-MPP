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
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();            
            $table->foreignId("nama_layanan_id")->nullable()->constrained("nama_layanan")->onDelete("cascade")->onUpdate("cascade");
            $table->text("deskripsi")->nullable();
            $table->string("slug")->nullable();
            $table->foreignId("instansi_id")->nullable()->constrained("instansi")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('layanan');
    }
};
