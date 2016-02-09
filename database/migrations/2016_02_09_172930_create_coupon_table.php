<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('amount');
            $table->integer('amount_used');
            $table->integer('freepoint');
            $table->timestamps();
        });

        Schema::create('used_coupon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coupon_id');
            $table->integer('user_id');
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
        //
        Schema::drop('coupons');
        Schema::drop('used_coupon');

    }
}
