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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->index();
            $table->string('status', 20)->index();
            $table->integer('author_id')->index();
            $table->string('type')->comment('loại: post, product, page')->index();
            $table->dateTime('post_date')->nullable();
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['slug', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
