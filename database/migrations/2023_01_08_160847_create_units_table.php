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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('building_id');
            $table->float('space')->comment('sq.ft');
            $table->integer('bedroom_count');
            $table->integer('bathroom_count');
            $table->integer('floor_number');
            $table->integer('price')->unsigned();
            $table->boolean('has_parking')->default(1); // Zero Means It Doesnt Have Parking And One Shows It Has;
            $table->boolean('is_sunny')->default(1); // Zero Means Its not Sunny And One Shows It Is;
            $table->boolean('sold')->default(0); // Zero Means Its Sold And One Shows Its Not;
            $table->boolean('is_public')->default(0); // Zero Means Its Private And One Shows Its Public;
            $table->enum('exposure', ['north', 'east', 'west', 'south'])->nullable();
            $table->string('longitude', 50)->nullable();
			$table->string('latitude', 50)->nullable();
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
        Schema::dropIfExists('units');
    }
};
