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
        Schema::create('post_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->index()->unsigned();
            $table->string('sku', 50)->nullable()->unique()->comment('Mã tồn kho, mã duy nhất để theo dõi tồn kho.');
            $table->enum('status', ['available', 'out_of_stock', 'waiting']);
            $table->bigInteger('regular_price')->nullable();
            $table->bigInteger('sale_price')->nullable();
            $table->integer('stock_quantity')->default(0)->comment('Số lượng sản phẩm hiện có trong kho');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_products');
    }
};
