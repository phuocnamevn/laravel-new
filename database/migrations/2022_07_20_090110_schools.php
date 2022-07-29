<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {

            $table->bigInteger('id')->autoIncrement();

            $table->bigInteger('id')->primary();
            $table->string('name')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('code')->unique()->nullable();
            $table->string('address')->unique()->nullable();
            $table->string('type', 10)->nullable();
            $table->string('phone')->nullable();
            $table->string('hotline');
            $table->string('province_code');
            $table->string('insitution_code');
            $table->tinyInteger('main_branch');
            $table->integer('zip_code');
            $table->string('atribute_information_setting_date');
            $table->string('old_school_investigation_number');
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('fax_number')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
