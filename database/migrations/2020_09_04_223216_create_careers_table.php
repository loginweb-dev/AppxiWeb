<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('driver_id')->constrained('users');
            $table->double('lat_inicial');
            $table->double('long_inicial');
            $table->double('lat_final_suggested')->comment('lat destino sugerido');
            $table->double('long_final_suggested')->comment('long destino sugerido');
            $table->double('lat_final');
            $table->double('long_final');
            $table->datetime('hours_start');
            $table->datetime('hours_end');
            $table->double('distance');
            $table->decimal('total',10,2);
            $table->string('address_initial');
            $table->string('address_suggested');
            $table->string('address_end');
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
        Schema::dropIfExists('careers');
    }
}
