<?php

use App\Models\Orders;
use App\Models\Cars;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Orders::class)->constrained();
            $table->foreignIdFor(Cars::class)->constrained();
            $table->tinyInteger('qty');
            $table->double('price');
            $table->double('total');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
