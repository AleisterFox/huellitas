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
        Schema::create('lading_page_configs', function (Blueprint $table) {
            $table->id();
            $table->string('adopted_pets_count')->default(12);

            $table->string('whatsapp')->default('5213314148548');
            $table->string('banner_main_quote_title', 900)->default("Dejando huella en tu corazón");
            $table->string('banner_main_quote_description', 900)->default("En nuestra organización de adopción de perritos, nos dedicamos a encontrar hogares amorosos para perros en necesidad. ¡Únete a nosotros en esta noble misión!");
            
            $table->string('banner_footer_quote_title', 900)->default("Alianzas estratégicas");
            $table->string('banner_footer_quote_description', 900)->default("Somos una organización protectora de animales especializada, desde el 2020, en la ayuda a perros maltratados y/o abandonados. Nuestros rescatistas realizan diariamente labores heroicas en un intento por salvar la mayor cantidad de vidas posible; sin embargo, su capacidad de dar cobijo, alimento y atención médica, se ve ampliamente rebasada por una problemática que nunca cesa de crecer.");

            $table->string('card_1_title')->default('Adopción de perritos');
            $table->string('card_1_text', 900)->default("Ofrecemos servicios de adopción de mascotas, encuentra a tu compañero peludo perfecto");
            $table->string('card_1_image')->nullable();

            $table->string('card_2_title')->default('Hacer donativos');
            $table->string('card_2_text', 900)->default("Tus donativos nos ayudan a seguir brindando cuidado y atención a los perritos en espera de un hogar amoroso.");
            $table->string('card_2_image')->nullable();

            $table->string('card_3_title')->default('Foster to adopt');
            $table->string('card_3_text', 900)->default("Nuestro programa de foster to adopt te permite brindar un hogar temporal a un perrito antes de adoptarlo de manera permanente.");
            $table->string('card_3_image')->nullable();

            $table->string('contact_phone')->default('3314148548');
            $table->string('contact_email')->default('roman@huellitasdiferentes.com');
            $table->string('contact_facebook')->nullable();
            $table->string('contact_instagram')->nullable();

            $table->string('donations_banner_title', 900)->default("Donativos");
            $table->string('donations_banner_image', 900)->nullable();
            $table->text('donations_banner_description', 900)->nullable();

            $table->string('adoption_banner_title', 900)->default("Foster to Adopt");
            $table->string('adoption_banner_image', 900)->nullable();
            $table->string('adoption_banner_question', 900)->default("¿Te gustaría saber que es nuestro programa Foster to Adopt?");
            $table->text('adoption_banner_description_1', 900)->nullable();
            $table->text('adoption_banner_image_1', 900)->nullable();
            $table->text('adoption_banner_description_2', 900)->nullable();
            $table->text('adoption_banner_image_2', 900)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lading_page_configs');
    }
};
