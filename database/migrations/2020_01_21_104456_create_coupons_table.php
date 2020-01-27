<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('c_id');
            $table->string('c_name');
//            $table->integer('c_minPrice');
            $table->integer('c_percentDiscount');
            $table->date('c_validity');
            $table->integer('c_maxDiscount');
            $table->boolean('c_activate');
//            $table->string('c_cashbackType');
//            $table->string('c_paymentMethod');
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
        Schema::dropIfExists('coupons');
    }
}
