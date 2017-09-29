<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->unique()->comment('產品名稱');
            $table->string('product_id')->unique()->comment('產品條碼: 組合-顏色-尺寸');
            $table->string('combination_code')->comment('產品組合 barcode');
            $table->string('color')->comment('顏色');
            $table->string('color_code')->comment('顏色 barcode');
            $table->string('size')->comment('尺寸');
            $table->string('size_code')->comment('尺寸 barcode');
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
        Schema::dropIfExists('products');
    }
}
