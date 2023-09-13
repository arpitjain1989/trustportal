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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->unsignedBigInteger('mobile')->unique();
            $table->text('password_reset_link')->nullable();
            $table->dateTime('link_created_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('batch', 20)->nullable();
            $table->string('hyt_id')->nullable();
            $table->string('state');
            $table->string('avatar')->nullable();
            $table->string('class_locations')->nullable();
            $table->string('whatsapp')->nullable();
            $table->tinyText('provider')->nullable();
            $table->string('provider_id', 100)->nullable();
            $table->string('access_token')->nullable();
            $table->rememberToken();
            $table->enum('to_show_guide', ['0', '1'])->default('1')->comment('To check whether to show guideline or not');
            $table->enum('is_accept_guide', ['0', '1'])->default('1')->comment('To check if guideline is accepted or not');
            $table->string('comment')->nullable();
            $table->enum('flag', ['0', '1'])->default('0')->comment('to show unread notification in adminpanel');
            $table->enum('active_status', ['0', '1'])->default('0')->comment('0 = inactive, 1 = active');
            $table->enum('payment_status',['0','1'])->default('0')->comment('0 = pending, 1 = completed');
            $table->softDeletes();
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
        Schema::dropIfExists('teachers');
    }
};
