<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name', 255);
            $table->string('key', 255);

            $table->integer('id')->primary();
            $table->string('name', 255)->unique();
            $table->string('key', 255)->unique();

            $table->integer('permission_group_id')->unique();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('permission_group_id')->references('id')->on('permission_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
