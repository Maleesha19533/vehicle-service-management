<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('vehicle_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('service_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->date('booking_date');
            $table->time('booking_time');

            $table->enum('status', [
                'Pending',
                'Confirmed',
                'Completed',
                'Cancelled'
            ])->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};