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
        Schema::create('ticket_quantities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('ticket_id');
            $table->foreignId('ticket_pricing_id');
            $table->integer('quantity');
            $table->bigInteger("total_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_quantities');
    }
};
