<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('user_id')->constrained();

            $table->string('photo_plaque')->nullable();
            $table->string('photo_license')->nullable();
            $table->string('photo_car')->nullable();
            $table->string('photo_qr')->nullable();
            $table->string('photo_ci')->nullable();
            $table->string('bank')->nullable();
            $table->string('payment_time')->nullable();
            $table->string('payment_options')->nullable();
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
