<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token_name')->nullable();
            $table->string('token_symbol')->nullable();
            $table->string('amt_usd')->nullable();
            $table->string('pay_methods')->nullable();
            $table->string('site_name')->nullable();
            $table->string('site_email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('site_url')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
