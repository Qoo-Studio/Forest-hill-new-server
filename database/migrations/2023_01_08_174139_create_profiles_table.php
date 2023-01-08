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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique('user_id');
			$table->boolean('active')->default(1); // Zero Shows User Has Been Deactived.
			$table->string('first_name');
			$table->string('last_name');
			$table->string('gender')->nullable();
			$table->date('birth_date');
			$table->string('sin');
			$table->string('government_id');
			$table->date('expiry_date');
			$table->string('phone_number');
			$table->integer('city_id')->index('');
			$table->string('country')->nullable();
			$table->string('suite')->nullable();
			$table->text('address');
			$table->string('postal_code');
			$table->string('profession');
			$table->text('about')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
