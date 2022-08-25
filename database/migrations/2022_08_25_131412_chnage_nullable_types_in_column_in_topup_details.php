<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChnageNullableTypesInColumnInTopupDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topup_details', function (Blueprint $table) {
            $table->string("product_code_topup")->nullable();
            $table->string("product_code_stripe")->nullable();
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
            $table->dropColumn('product_code_topup');
            $table->dropColumn('product_code_stripe');
        });
    }
}
