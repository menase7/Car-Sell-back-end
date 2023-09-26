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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('Company_name');
            $table->string('Company_phone');
            $table->string('Company_address');
            $table->string('Company_location');
            $table->string('Company_email');
            $table->string('Company_facebook');
            $table->string('Company_instagram');
            $table->string('Company_twitter');
            $table->string('Company_linkdin');
            $table->string('Company_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
