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
            $table-> bigInteger('id')->unsigned()->autoIncrement();
            $table->char('uuid', 36)->collation();
            $table->bigInteger('attachable_id', 20)->unsigned();
            $table->string('file_path', 255)->collation();
            $table->string('file_name', 255)->collation();
            $table->string('extension', 255)->collation();
            $table->string('mime_type', 255);
            $table->integer('size', 10)->unsigned()->default('0');
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
