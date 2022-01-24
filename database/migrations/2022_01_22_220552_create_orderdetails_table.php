<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('order_id');  
            $table->string('order_receiver_personname');
            $table->string('order_receiver_name');
            $table->string('order_receiver_address');
            $table->string('order_receiver_city');
            $table->string('order_receiver_province');
            $table->string('order_receiver_postalcode');
            $table->string('order_receiver_phone');
            $table->string('order_total_before_tax');
            $table->string('order_total_tax');
            $table->string('order_tax_per');
            $table->string('order_total_after_tax');
            $table->string('order_amount_paid');
            $table->string('order_total_amount_due');
            $table->timestamp('order_date')->useCurrent();
            $table->string('note');
            $table->longText('productCode');
            $table->longText('productName');
            $table->longText('quantity');
            $table->longText('price');
            $table->longText('total');
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
        Schema::dropIfExists('orderdetails');
    }
}
