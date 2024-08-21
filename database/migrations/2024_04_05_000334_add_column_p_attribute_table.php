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
        Schema::table('p_attributes', function (Blueprint $table) {
            $table->string('color', 20)->nullable()->after('feature_image');
            $table->string('template', 20)->nullable()->after('color');
            $table->integer('in_order')->default(0)->after('template');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
