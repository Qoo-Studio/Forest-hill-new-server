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
        Schema::create('purchasers', function (Blueprint $table) {
            $table->id();
			$table->boolean('active')->default(1); // Zero Shows User Has Been Deactived.
			$table->string('first_name');
			$table->string('last_name');
			$table->string('birth_date');
			$table->string('sin');
			$table->string('government_id');
			$table->string('expiry_date');
			$table->string('phone_number');
			$table->integer('city_id')->index('');
			$table->string('country')->nullable();
			$table->string('suite')->nullable();
			$table->text('address');
			$table->string('postal_code');
			$table->string('profession');
			$table->text('about')->nullable();
			$table->longtext('avatar')->nullable();
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
        Schema::dropIfExists('purchasers');
    }
};
