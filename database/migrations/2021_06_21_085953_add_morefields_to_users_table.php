<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMorefieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->after('email')->nullable();
            $table->date('dob')->after('email')->nullable();
            $table->string('nataionality')->after('email')->nullable();
            $table->string('wallet_address')->after('email')->nullable();
            $table->string('ref_link')->after('email')->nullable();
            $table->string('ref_by')->after('email')->nullable();
            $table->string('verification_status')->after('email')->nullable();
            $table->string('token_bal')->after('email')->nullable();
            $table->string('btc_bal')->after('email')->nullable();
            $table->string('eth_bal')->after('email')->nullable();
            $table->string('ltc_bal')->after('email')->nullable();
            $table->string('usd_bal')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
    }
}
