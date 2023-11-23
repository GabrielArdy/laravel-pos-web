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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('setting_id');
            $table->string('company_name', 100);
            $table->text('company_address');
            $table->string('company_phone', 20);
            $table->string('invoice_type');
            $table->integer('discount');
            $table->string('logo_path');
            $table->string('member_card_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
