<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymethods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('method_name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('type')->nullable();
            $table->string('address')->nullable();
            $table->string('acntname')->nullable();
            $table->string('acntnum')->nullable();
            $table->string('bankname')->nullable();
            $table->string('swcode')->nullable();
            $table->string('networkmode')->nullable();
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
        Schema::dropIfExists('paymethods');
    }
}
