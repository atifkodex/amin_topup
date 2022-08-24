<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topups', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('receiver_number');
            $table->string('receiver_country');
            $table->string('network');
            $table->float('topup_amount');
            $table->float('amount_after_tax');
            $table->float('amount_usd');
            $table->float('processing_fee');
            $table->float('total_amount_usd');
            $table->string('status');
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
        Schema::dropIfExists('topups');
    }
}
