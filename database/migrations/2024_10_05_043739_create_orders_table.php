<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // Order ID (primary key)
            $table->string('customer_name');  // Nama pelanggan
            $table->enum('status', ['Pending', 'Shipped', 'Delivered', 'Canceled'])->default('Pending');  // Status pesanan
            $table->decimal('total', 15, 2);  // Total pesanan (dalam format desimal)
            $table->date('date');  // Tanggal pesanan
            $table->timestamps();  // created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

