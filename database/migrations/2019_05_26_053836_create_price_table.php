<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nepali_rupee');
            $table->string('indian_rupee');
            $table->string('american_dollar');
            $table->string('australian_dollar');
            $table->string('pound_sterling');
            $table->string('euro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
}
