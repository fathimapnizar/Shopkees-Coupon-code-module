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
    //https://stackoverflow.com/a/11338832 place forms for code, discounts etc...  then have a submit button.
    // convert all values into a json format & post it to add-coupon endpoint. 
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string("code",100);
            $table->string("condition",100);
            $table->string("cat",100);
            $table->string("name",100);
            $table->string("applied_on",100);
            $table->string("amount_or_percentage",100);
            $table->string("amount_limit",100);
            $table->string("value",100);
            $table->string("in_or_not_in",100);
            $table->string("cart_total",100);
           
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
