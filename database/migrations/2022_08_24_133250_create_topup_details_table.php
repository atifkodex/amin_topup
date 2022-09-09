<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopupDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topup_details', function (Blueprint $table) {
            $table->id();
            $table->string('operator_name');
            $table->integer('denomination');
            $table->float('topup_usd');
            $table->float('transaction_fees');
            $table->float('total_amount');
            $table->string('product_code');
            $table->string('product_code_topup');
            $table->string('product_code_stripe');
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
        Schema::dropIfExists('topup_details');
    }
}
