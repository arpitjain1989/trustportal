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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('class_req_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('whatsapp_no');
            $table->string('mobile');
            $table->string('how_did_find');
            $table->string('list_program_done');
            $table->string('disability');
            $table->string('helth_issues');
            $table->string('policy_agree');
            $table->string('price');
            $table->string('child_first_name');
            $table->string('child_last_name');
            $table->enum('payment_status',['1','0'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
