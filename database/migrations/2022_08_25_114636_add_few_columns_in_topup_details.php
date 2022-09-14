<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFewColumnsInTopupDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topup_details', function (Blueprint $table) {
            $table->float('exchange_rate');
            $table->float('fee_percentage');
            $table->float('stripe_fee');
            $table->integer('operator_id');
            $table->dropColumn('total_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topup_details', function (Blueprint $table) {
            $table->dropColumn('exchange_rate');
            $table->dropColumn('fee_percentage');
            $table->dropColumn('stripe_fee');
            $table->dropColumn('operator_id');
            $table->float('total_amount');
        });
    }
}
