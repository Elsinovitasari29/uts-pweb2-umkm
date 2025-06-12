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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->double('modal');
            $table->string('pemilik', 45);
            $table->string('alamat', 100);
            $table->string('website', 45);
            $table->string('email', 45);
            $table->unsignedBigInteger('kabkotas_id');
            $table->integer('rating');
            $table->unsignedBigInteger('kategori_umkms_id');
            $table->unsignedBigInteger('pembinas_id');
            $table->timestamps();

            $table->foreign('kabkotas_id')->references('id')->on('kabkotas')->onDelete('cascade');
            $table->foreign('kategori_umkms_id')->references('id')->on('kategori_umkms')->onDelete('cascade');
            $table->foreign('pembinas_id')->references('id')->on('pembinas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
