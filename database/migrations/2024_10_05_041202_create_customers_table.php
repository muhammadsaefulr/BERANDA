<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();  // ID Pelanggan
            $table->string('name');  // Nama Pelanggan
            $table->string('email')->unique();  // Email Pelanggan
            $table->integer('orders')->default(0);  // Jumlah Pesanan
            $table->date('last_order')->nullable();  // Tanggal Pesanan Terakhir
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

