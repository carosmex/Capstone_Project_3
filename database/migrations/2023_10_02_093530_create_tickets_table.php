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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // This is the auto-incrementing ID.
            $table->string('status'); // Open, Closed, Solved, Pending
            $table->string('service_type'); // e.g., Technical Support, Billing, General Inquiry
            $table->string('requester'); // e.g., Technical Support, Billing, General Inquiry
            $table->text('description'); // e.g., description of a ticket
            $table->timestamp('requested')->useCurrent();
            $table->string('priority'); // Low, Normal, High, Urgent
            $table->timestamps(); // Automatically set the creation date
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
