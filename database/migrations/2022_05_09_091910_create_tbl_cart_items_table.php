<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cart_items', function (Blueprint $table) {
            $table->id();
            $table->string('txnRef');
            $table->string('itemName');
            $table->string('productCode');
            $table->string('itemQty');
            $table->decimal('price');
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
        Schema::dropIfExists('tbl_cart_items');
    }
};
