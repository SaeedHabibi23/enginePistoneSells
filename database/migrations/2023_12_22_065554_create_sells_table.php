<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->bigIncrements('sell_id')->id()->unsigned();

            $table->date('product_date_sold');
            $table->string('ProductOne')->nullable();
            $table->string('ProductcountOne')->nullable();
            $table->integer('priceonefe')->nullable();
            $table->integer('countone')->nullable();


            $table->string('Producttwo')->nullable();
            $table->string('Productcounttwo')->nullable();
            $table->integer('pricetwofe')->nullable();
            $table->integer('counttwo')->nullable();

            $table->string('Productthree')->nullable();
            $table->string('Productcountthree')->nullable();
            $table->integer('pricethreefe')->nullable();
            $table->integer('countthree')->nullable();

            $table->string('Productfour')->nullable();
            $table->string('Productcountfour')->nullable();
            $table->integer('pricefourfe')->nullable();
            $table->integer('countfour')->nullable();

            $table->string('Productfive')->nullable();
            $table->string('Productcountfive')->nullable();
            $table->integer('pricefivefe')->nullable();
            $table->integer('countfive')->nullable();

            $table->string('Productsix')->nullable();
            $table->string('Productcountsex')->nullable();
            $table->integer('pricesixfe')->nullable();
            $table->integer('countsix')->nullable();

            $table->string('Productseven')->nullable();
            $table->string('Productcountseven')->nullable();
            $table->integer('pricesevenfe')->nullable();
            $table->integer('countseven')->nullable();

            $table->string('Producteight')->nullable();
            $table->string('Productcountnine')->nullable();
            $table->integer('priceeightfe')->nullable();
            $table->integer('counteight')->nullable();

            $table->string('Productnine')->nullable();
            $table->string('Productcounteight')->nullable();
            $table->integer('priceninefe')->nullable();
            $table->integer('countnine')->nullable();

            $table->string('Productten')->nullable();
            $table->string('Productcountten')->nullable();
            $table->integer('pricetenfe')->nullable();
            $table->integer('countten')->nullable();


            $table->string('selltype');
            $table->integer('totalprice');
          

            $table->string('customerName')->nullable();

            $table->integer('customer_id')->nullable();



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
        Schema::dropIfExists('sells');
    }
}
