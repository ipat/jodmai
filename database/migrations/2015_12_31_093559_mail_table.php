<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Mail categories table
        Schema::create('categories', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->text('description');
          $table->string('picture_url');
        });

        // Create Mail-Type Table
        Schema::create('mailtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('picture_url');
            $table->string('price');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });

        // Create Address Table
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->text('address_line_1');
            $table->text('address_line_2');
            $table->text('address_line_3');
            $table->text('address_line_4');
            $table->string('postcode');
        });

        // Create Mail Table
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('mail_type_id')->unsigned();
            $table->foreign('mail_type_id')->references('id')->on('mailtypes');
            $table->string('mail_url');
            $table->text('other');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('mails');
      Schema::drop('addresses');
      Schema::drop('mailtypes');
      Schema::drop('categories');
    }
}
