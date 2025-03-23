<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'cars', callback: function (Blueprint $table): void {
            $table->bigIncrements(column: 'id_car'); // BIGSERIAL PRIMARY KEY
            $table->string(column: 'car_make', length: 255); // VARCHAR(255) NOT NULL
            $table->string(column: 'car_model', length: 255); // VARCHAR(255) NOT NULL
            $table->integer(column: 'car_year'); // INTEGER NOT NULL
            $table->double(column: 'car_price'); // DOUBLE PRECISION NOT NULL
            $table->boolean(column: 'car_status'); // BOOLEAN NOT NULL
            $table->timestamps(); // Opcional: created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(table: 'cars');
    }
}
