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
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->char('uuid', 36);
            $table->bigInteger('attachable_id')->length(10)->unsigned();
            $table->string('file_path', 255);
            $table->string('file_name', 255);
            $table->string('extension', 255);
            $table->string('mime_type', 255);
            $table->integer('size')->length(10)->unsigned()->default('0');
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
        Schema::dropIfExists('attachments');
    }
};
