<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unique('user_id');
			$table->boolean('active')->default(0);
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('gender')->nullable();
			$table->date('birth_date')->nullable();
			$table->integer('degree')->nullable();
			$table->string('nic')->nullable();
			$table->string('mobile_number')->nullable();
			$table->smallInteger('province')->nullable()->index('');
			$table->string('city')->nullable()->index('');
			$table->string('address')->nullable();
			$table->string('postcode')->nullable();
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
}
