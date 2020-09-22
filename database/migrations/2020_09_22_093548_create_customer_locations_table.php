<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_locations', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('direction')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->foreignId('customer_id')->constrained();

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
        Schema::dropIfExists('customer_locations');
    }
}
