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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('phone');
            $table->string('tech_support_phone')->nullable()->default(null);
            $table->float('rating_overall', 3, 2);
            $table->float('rating_connection', 3, 2);
            $table->float('rating_stability', 3, 2);
            $table->float('rating_speed', 3, 2);
            $table->float('rating_service', 3, 2);
            $table->longText('description');
            $table->integer('order');
            $table->text('image');
            $table->unsignedInteger('plans_count');
            $table->unsignedInteger('promotions_count');
            $table->unsignedInteger('reviews_count');
            $table->unsignedInteger('min_price');
            $table->unsignedInteger('min_internet_speed_value');
            $table->string('min_internet_speed_units');
            $table->unsignedInteger('max_internet_speed_value');
            $table->string('max_internet_speed_units');
            $table->string('card_bg_color');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
