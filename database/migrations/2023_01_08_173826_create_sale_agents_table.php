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
        Schema::create('sale_agents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
			$table->string('last_name');
			$table->string('gender')->nullable();
			$table->string('phone_number');
			$table->string('email');
			$table->string('bookerage');
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
        Schema::dropIfExists('sale_agents');
    }
};
