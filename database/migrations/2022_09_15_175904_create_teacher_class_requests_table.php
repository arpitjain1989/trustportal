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
        Schema::create('teacher_class_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained()->cascadeOnDelete();
            $table->foreignId('class_module_id')->constrained()->cascadeOnDelete();
            $table->string('primary_teacher', 50);
            $table->string('secondary_teacher', 50)->nullable();
            $table->unsignedInteger('center');
            $table->string('area');
            $table->unsignedBigInteger('zip_code');
            $table->string('address');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('language');
            $table->unsignedInteger('no_of_participants');
            $table->unsignedInteger('price')->nullable();
            $table->text('flyer')->nullable();
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
        Schema::dropIfExists('teacher_class_requests');
    }
};
