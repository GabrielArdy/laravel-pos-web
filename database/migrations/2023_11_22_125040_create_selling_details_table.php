<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('selling_details', function (Blueprint $table) {
            $table->increments('selling_detail_id');
            $table->integer('selling_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->bigInteger('selling_price');
            $table->integer('total');
            $table->bigInteger('sub_total');
            $table->integer('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selling_details');
    }
};
