<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id')->unsigned()->comment('品牌 (brand.id)');
            $table->string('name')->comment('商品名稱');
            $table->string('brand_sn')->nullable()->comment('產品序號');
            $table->decimal('official_price', 16, 2)->comment('官方訂價');
            $table->decimal('real_price', 16, 2)->comment('實際售價');
            $table->text('img_name')->nullable()->comment('商品圖片(多張圖片用逗號分隔)');
            $table->boolean('enabled')->default(true)->comment('上/下架開關');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
