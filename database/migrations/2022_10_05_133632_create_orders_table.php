<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->nullable()->constrained("users")->nullOnDelete();
            $table->foreignId('customer_id')->nullable()->constrained("users")->nullOnDelete();
            $table->string('status')->default('Pending');
            $table->foreignId('payment_type')->nullable()->constrained("payments")->nullOnDelete();
            $table->float('order_prise');
            $table->string('order_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
