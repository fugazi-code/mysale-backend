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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('cities_id')->nullable();
            $table->string('order')->nullable();
            $table->string('order_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('is_other')->nullable();
            $table->string('searchable_text')->nullable();
            $table->string('url_name_ar')->nullable();
            $table->string('url_name_en')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
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
        Schema::dropIfExists('cities');
    }
};
