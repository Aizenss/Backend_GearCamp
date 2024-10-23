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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('tool_id')->index();
            $table->date('rental_date');
            $table->date('return_date')->nullable();
            $table->enum('status', ['menunggu pembayaran', 'dipinjam', 'dikembalikan', 'melebihi batas waktu'])->default('menunggu pembayaran');
            $table->integer('price_rental');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
