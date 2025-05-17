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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
          
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('date');
            $table->string('time');
            $table->string('type');
            $table->string('type_of_payment');
            $table->enum('status', ['новое', 'в работе', 'выполнено', 'отклонено'])->default('новое');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
