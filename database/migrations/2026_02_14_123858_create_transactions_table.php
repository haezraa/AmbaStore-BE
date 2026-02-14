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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('invoice_code')->unique();

        $table->string('game_name');
        $table->string('game_publisher');
        $table->string('item_name');

        $table->string('user_id_game');
        $table->string('zone_id')->nullable();
        $table->string('server_id')->nullable();

        $table->string('payment_method');
        $table->bigInteger('price');
        $table->bigInteger('tax');
        $table->bigInteger('total_price');

        $table->string('email');
        $table->string('whatsapp');

        $table->enum('status', ['PENDING', 'PAID', 'FAILED'])->default('PENDING');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
