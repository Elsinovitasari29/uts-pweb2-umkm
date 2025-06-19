<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->double('modal');
            $table->string('pemilik', 45);
            $table->string('alamat', 100);
            $table->string('website', 45);
            $table->string('email', 45);
            $table->unsignedBigInteger('kabkota_id');
            $table->integer('rating');
            $table->unsignedBigInteger('kategori_umkm_id');
            $table->unsignedBigInteger('pembina_id');
            $table->timestamps();

            $table->foreign('kabkota_id')->references('id')->on('kabkota')->onDelete('cascade');
            $table->foreign('kategori_umkm_id')->references('id')->on('kategori_umkm')->onDelete('cascade');
            $table->foreign('pembina_id')->references('id')->on('pembina')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
