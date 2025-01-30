<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['incoming', 'sent']); // نوع البريد
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade'); // ربط الخدمة
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // ربط المستخدم
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
