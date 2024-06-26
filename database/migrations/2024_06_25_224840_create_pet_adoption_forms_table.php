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
        Schema::create('pet_adoption_forms', function (Blueprint $table) {
            $table->id();

            $table->integer('pet_id');
            $table->string('name');
            $table->integer('age');
            $table->string('work');
            $table->string('house_type');
            $table->string('garden_type');
            $table->text('address');
            $table->string('email');
            $table->string('phone');

            $table->text('reason_to_adopt');
            $table->boolean('has_pet');

            $table->string('workout_time');
            $table->string('pet_alone_time');
            $table->boolean('old_parents');
            $table->boolean('kids');

            $table->boolean('has_any_other_pet');
            $table->string('pet_type');

            $table->boolean('has_vet');
            $table->boolean('family_aggree');

            $table->string('media_adopt');

            $table->text('message');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_adoption_forms');
    }
};
