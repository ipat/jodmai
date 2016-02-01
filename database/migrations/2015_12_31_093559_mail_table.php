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
            $table->integer('width');
            $table->integer('height');
            $table->timestamps();
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
            $table->boolean('is_sender')->default(false);
            $table->boolean('is_primary')->default(false);
            $table->timestamps();
        });

        // Create Mail Table
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('mail_type_id')->unsigned();
            $table->foreign('mail_type_id')->references('id')->on('mailtypes');
            $table->string('mail_url')->nullable();
            $table->text('content')->nullable();
            $table->text('other')->nullable();
            $table->string('sender_name');
            $table->text('sender_address_line_1');
            $table->text('sender_address_line_2');
            $table->text('sender_address_line_3');
            $table->text('sender_address_line_4');
            $table->string('sender_postcode');
            $table->string('receiver_name')->nullable();
            $table->text('receiver_address_line_1')->nullable();
            $table->text('receiver_address_line_2')->nullable();
            $table->text('receiver_address_line_3')->nullable();
            $table->text('receiver_address_line_4')->nullable();
            $table->string('receiver_postcode')->nullable();
            $table->integer('status');
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
      Schema::drop('mails');
      Schema::drop('addresses');
      Schema::drop('mailtypes');
      Schema::drop('categories');
    }
}
