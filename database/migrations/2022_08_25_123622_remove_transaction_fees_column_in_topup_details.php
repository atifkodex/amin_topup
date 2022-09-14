<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTransactionFeesColumnInTopupDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topup_details', function (Blueprint $table) {
            $table->dropColumn('transaction_fees');
            $table->dropColumn('product_code');

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
            $table->float('transaction_fees');
            $table->string('product_code');
            
        });
    }
}
