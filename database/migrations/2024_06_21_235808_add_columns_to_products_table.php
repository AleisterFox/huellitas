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
        Schema::table('products', function (Blueprint $table) {
            $table->after('image', function ($table) {
                $table->string('image2')->nullable();
                $table->string('image3')->nullable();
                $table->string('image4')->nullable();
                $table->string('image5')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image2');
            $table->dropColumn('image3');
            $table->dropColumn('image4');
            $table->dropColumn('image5');
        });
    }
};
