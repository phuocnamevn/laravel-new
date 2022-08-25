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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sex');
            $table->string('address');
            $table->string('birthday');
            $table->string('phone');
            $table->string('zalo')->nullable();
            $table->string('email');
            $table->string('person_contact')->nullable();
            $table->string('role')->nullable();
            $table->string('unit_name')->nullable();
            $table->string('tax')->nullable();
            $table->string('address_bill')->nullable();
            $table->string('permission_accountant')->nullable();
            $table->string('lock_create_order')->nullable();
            $table->string('desc_owe')->nullable();
            $table->string('desc_owe_allow')->nullable();
            $table->string('atm')->nullable();
            $table->text('note')->nullable();
            $table->integer('type')->nullable();
            $table->bigInteger('id_user_create');
            $table->foreign('id_user_create')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
