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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('nama_product');
            $table->string('slug');
            $table->string('status')->nullable();
            $table->string('jumlah_product');
            $table->foreignId('category_id');
            $table->date('flashsale')->nullable();
            $table->string('harga_product');
            $table->string('harga_coret_product')->nullable();
            $table->string('sold_out')->nullable();
            $table->enum('info_product', ['Sale', 'New', 'Hot', 'Promo']);
            $table->string('gambar_product');
            $table->string('gambar_detailProduct1');
            $table->string('gambar_detailProduct2')->nullable();
            $table->string('gambar_detailProduct3')->nullable();
            $table->text('deskripsi_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
