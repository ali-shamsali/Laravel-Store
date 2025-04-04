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
        Schema::connection('mysql_settings')->create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('upLabel')->nullable();
            $table->string('wigetLabel_1')->nullable();
            $table->string('wigetLabel_2')->nullable();
            $table->string('wigetLabel_3')->nullable();
            $table->string('rssLabel')->nullable();
            $table->string('socialLabel')->nullable();
            $table->string('supportLabel')->nullable();
            $table->string('phoneLabel')->nullable();
            $table->string('addressLabel')->nullable();
            $table->string('emailLabel')->nullable();
            $table->string('aboutheadLabel')->nullable();
            $table->text('aboutbodyLabel')->nullable();
            $table->text('copyright')->nullable();

            $table->string('Text_social_1')->nullable();
            $table->string('Text_social_2')->nullable();
            $table->string('Text_social_3')->nullable();
            $table->string('Text_social_4')->nullable();
            $table->string('Link_social_1')->nullable();
            $table->string('Link_social_2')->nullable();
            $table->string('Link_social_3')->nullable();
            $table->string('Link_social_4')->nullable();
            $table->string('Text_phone')->nullable();
            $table->string('Text_email')->nullable();
            $table->string('Text_address')->nullable();
            $table->timestamps();
        });

        Schema::connection('mysql_settings')->create('footers-logo', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('isActive')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('mysql_settings')->create('footers-menu', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('isActive')->nullable();
            $table->timestamps();
        });

        Schema::connection('mysql_settings')->create('footers-namad', function (Blueprint $table) {
            $table->id();
            $table->string('image_app1')->nullable();
            $table->string('image_app2')->nullable();
            $table->string('link_app1')->nullable();
            $table->string('link_app2')->nullable();
            $table->string('enamad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_settings')->dropIfExists('footers');
        Schema::connection('mysql_settings')->dropIfExists('footers-logo');
        Schema::connection('mysql_settings')->dropIfExists('footers-menu');
        Schema::connection('mysql_settings')->dropIfExists('footers-menu');
        Schema::connection('mysql_settings')->dropIfExists('footers-namad');
    }
};
