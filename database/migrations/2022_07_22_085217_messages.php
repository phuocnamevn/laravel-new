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
        Schema::create('messages', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->string('room');
            $table->bigInteger('sender_id')->length(20)->unsigned();
            $table->string('sender_type', 255);
            $table->bigInteger('receiver_id')->length(20)->unsigned();
            $table->string('receiver_type', 255);
            $table->text('content');
            $table->string('content_type', 255)->default('text');
            $table->integer('association_id')->length(10)->unsigned();
            $table->string('association_type', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
