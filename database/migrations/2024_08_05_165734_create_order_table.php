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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->longText('file')->nullable();
            $table->longText('note')->nullable();
            $table->date('expired')->nullable();
            $table->integer('buyer_id')->references('id')->on('user')->cascadeOnDelete();
            $table->integer('freelancer_id')->references('id')->on('users')->cascadeOnDelete();
            $table->integer('service_id')->references('id')->on('service')->cascadeOnDelete();
            $table->integer('order_status_id')->references('id')->on('order_status')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
