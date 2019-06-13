<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentsCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void@e
     */
    public function up()
    {
        Schema::create('payments', function(Blueprint $table) {

           $table->increments('id');
           $table->string('order_no');
           $table->integer('price')->unsigned();
           $table->string('customer');
           $table->date('issue_date')->nullable();
           $table->string('note')->nullable();
           $table->string('method');
           $table->integer('user_id')->unsigned();
           $table->integer('shop_id')->unsigned();
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
        Schema::dropIfExists('payments');
    }
}
