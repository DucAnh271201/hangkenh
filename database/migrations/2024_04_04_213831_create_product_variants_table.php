<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned()->index();
            $table->bigInteger('attribute_id')->unsigned()->index();
            $table->string('image')->nullable();
            $table->string('sku', 50)->nullable()->unique()->comment('Mã tồn kho, mã duy nhất để theo dõi tồn kho.');
            $table->enum('status', ['available', 'out_of_stock', 'waiting']);
            $table->bigInteger('regular_price')->nullable();
            $table->bigInteger('sale_price')->nullable();
            $table->integer('stock_quantity')->default(0)->comment('Số lượng sản phẩm hiện có trong kho');
            $table->text('description');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('post_products');
            $table->foreign('attribute_id')->references('id')->on('p_attributes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
