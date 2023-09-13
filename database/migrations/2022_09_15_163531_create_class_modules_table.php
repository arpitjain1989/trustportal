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
        Schema::create('class_modules', function (Blueprint $table) {
            $table->id();
            $table->enum('program_type', ['1', '2'])->default('1')->comment('1 = New, 2 = Review');
            $table->text('module_name');
            $table->text('practice_element');
            $table->string('duration', 20);
            $table->unsignedInteger('min_session');
            $table->unsignedInteger('tentative');
            $table->unsignedInteger('tier2');
            $table->unsignedInteger('tier3');
            $table->unsignedInteger('tier4');
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
        Schema::dropIfExists('class_modules');
    }
};
